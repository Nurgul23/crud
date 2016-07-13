<?php

namespace App;
use App\Card;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable=['text'];
    public function card()
    {
    	return $this->belongsTo(Card::class);
    }
}
