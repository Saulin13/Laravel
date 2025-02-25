<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function contato(){

        $email = 'saulovasconcelos07@gmail.com';
        $nome = 'Saulo';

        return view ('contato',
        [
            'email' => $email,
            'nome' => $nome
        ]);

    }


}
