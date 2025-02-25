<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsControler extends Controller
{
  
    public function produtos(){

        $busca = request('search');

        return view('produtos', ['busca' => $busca]);

    }

}
