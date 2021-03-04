<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Notes;
use App\Models\User;

class NotesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // $team = User::where('id', auth()->user()->currentTeam->id)->get();
        $notes = Notes::where('user_id', auth()->user()->id)
                        ->orderBy('updated_at', 'DESC')
                        ->get();

        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new note.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created note in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body'  => 'required'
        ]);

        $note = Notes::create([
            'user_id' => $request->user()->id,
            'title'   => $request->title,
            'slug'    => Str::slug($request->title),
            'body'    => $request->body,
        ]);

        Notes::create([
            'notes-trixFields' => request('notes-trixFields'),
            'attachment-notes-trixFields' => request('attachment-notes-trixFields')
        ]);

        return redirect()->route('notes');
    }

    /**
     * Show the form for editing the specified note.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Notes::find($id);
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified note.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            ]);
        
        $note = Notes::find($id)->update($request->all());

        return redirect()->route('notes');
    }
    
    public function destroy($id)
    {
        $note = Notes::find($id)->delete();

        return back();
        
    }

    public function show($id)
    {
        $note = Notes::find($id);
        return view('notes.show', compact('note'));
    }
}
