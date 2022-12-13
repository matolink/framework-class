<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use Illuminate\Support\Facades\Http;

class EntryController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if(!isset($user)){
            return view('about');
        }
        $entries = Entry::all();
        return view('home')->with('entries',$entries)->with('user',$user->id_role)->with('title','Diario General');
    }

    public function personal()
    {
        $user = auth()->user();
        if(!isset($user)){
            return view('about');
        }
        $entries = Entry::where('user_email', $user->email)->get();
        return view('home')->with('entries',$entries)->with('user',$user->id_role)->with('title','Diario Personal');
    }

    public function add()
    {
        $user = auth()->user();
        if(!isset($user)){
            return view('about');
        }
        return view('add');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $api_key = env('TMDB_API_KEY');
        $img_url = 'https://image.tmdb.org/t/p/w500';
        $user_input_name = $request->get('name');
        #formatting name for api request
        str_replace(' ', '+', $user_input_name);
        $movie_request = Http::get("https://api.themoviedb.org/3/search/movie?api_key=$api_key&query=$user_input_name");
        if(!isset($movie_request->object()->results[0])){
            return redirect('/add')->with('alert','Film not found, try another title!');
        }
        $movie_object = $movie_request->object()->results[0];

        #Summary manipulation
        $summary = $movie_object->overview;
        if(mb_strlen($summary) > 100) {
            //this finds the position of the first period after 100 characters
            $period = strpos($summary, '.', 100);
            //this finds the position of the first space after 100 characters
            //we can use this for a clean break if a '.' isn't found.
            $space = strpos($summary, ' ', 100);

            if($period !== false) {
                //this gets the characters 0 to the period and stores it in $teaser
                $teaser = substr($summary, 0, $period);
            } elseif($space !== false) {
                //this gets the characters 0 to the next space
                $teaser = substr($summary, 0, $space);
            } else {
                //and if all else fails, just break it poorly
                $teaser = substr($summary, 0, 100);
            }
        }
        #making the movie poster path
        $movie_poster = $img_url.$movie_object->poster_path;
        #making the Entry
        $entries = new Entry();
        $entries->name = $movie_object->original_title;
        $entries->rating = $request->get('rating');
        $entries->image = $movie_poster;
        $entries->summary = $teaser;
        $entries->release_date = $movie_object->release_date;
        $entries->user_email = $user->email;
        $entries->save();
        return redirect('/home');
    }

    public function update(Request $request, $id)
    {
        $entries = Entry::find($id);
        $entries->name = $request->get('name');
        $entries->rating = $request->get('rating');
        $entries->image = $request->get('image');
        $entries->summary = $request->get('summary');

        $entries->save();
        return redirect('/home');
    }

    public function edit($id)
    {
        $entry = Entry::find($id);
        return view('edit')->with('entry',$entry);
    }

    public function destroy($id)
    {
        $entry = Entry::find($id);       

        $entry->delete();
        return redirect('/home')->with('delete','ok');
    }
    //
}
