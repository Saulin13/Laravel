<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index(){
        $nome = "Saulo";
        $idade = 21;
        $profissao = "Programador";
    
        $arr = [1,2,3,4,5];
    
        $nomes = ['Saulo', 'Paulo', 'Cesar', 'Matheus'];
        
        return view('welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => $profissao,
                'arr' => $arr,
                'nomes' => $nomes
            ]);
    }

    public function criar(){
        return view('eventos.criar');
    }



}
