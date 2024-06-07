<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quartos;

class QuartosController extends Controller
{
   public function index () {
        return view('home');
    }

    public function quartos () { // nome da funcao que vai ser chamada
         // Return the view with the quartos data
         return view('quartos.index', 
         ['quartos' => Quartos::all()]);
    }


    public function show(Quartos $quarto){
        return view('quartos.show', ['quarto' => $quarto]); // Return the view with the listing data
        } 
        

}
