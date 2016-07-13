<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Http\Requests;

class CardController extends Controller
{
	public function show(){
		$y= Card::all();
    	return view('main', compact('y'));
	}
    public function add(Request $req){
    	$new=new Card;
    	$new->title=$req->title;
    	$new->save();
    	$y= Card::all();
    	return view('main', compact('y'));
    }
}
