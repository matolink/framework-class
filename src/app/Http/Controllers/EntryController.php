<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EntryController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $entries = Entry::all();
        return view('home')->with('entries',$entries)->with('user',$user->id_role);
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $entries = new Entry();
        $entries->name = $request->get('name');
        $entries->rating = $request->get('rating');
        $entries->image = $request->get('image');
        $entries->summary = $request->get('summary');
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
        return redirect('/home')->with('delete','ok')->with('user',$user->id_role);
    }
    //
}
