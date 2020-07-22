<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cards;


class CardsController extends Controller
{
    public function index(){

        $cards = Cards::all();

        return view('cards.all-cards',['cards'=>$cards]);
    }

    public function show($id){

        $card = Cards::findOrFail($id);

        return view('cards.single-card',['card'=>$card]);
        }
        
    }

