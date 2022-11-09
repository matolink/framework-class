<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function index()
    {
        $entries = Entry::all();
        return view('home')->with('entry',$entries);
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

    public function edit($id)
    {
        $entry = Entry::find($id);
        return view('edit')->with('entry',$entry);
    }

    public function destroy($id)
    {
        $entry = Entry::find($id);       

        $entry->delete();
        return redirect('/home')->with('eliminar','ok');
    }
    //
}
