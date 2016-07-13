<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Note;
use App\Http\Requests;

class NotesController extends Controller
{
	public function add(Request $req, Card $id)
	{
		$new= new Note;
		$new->text=$req->text;
		$id->notes()->save($new);
		return back();

	}
    public function show(Card $card)
    {
		
    	return view('show', compact('card'));
    }

    public function delete(Note $id)
    {
    	$id->delete();
    	return back();
    }
    public function edit(Note $note)
    {
    	return view('edit', compact('note'));
    }
    public function update(Request $req, Note $note)
    {
    	$note->update($req->all());
    	return redirect('/');
    }
}
