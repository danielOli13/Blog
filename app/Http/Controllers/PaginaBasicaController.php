<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaBasicaController extends Controller
{
    //Retorna a pagina sobre
    public function sobre ()
    {
        $dado = "blog@blog.com";
        //1 forma de passar dado
        return view('sobre')->with('email',$dado)
        ->with('telefone','38 4002-8922');


        //outra forma de passar dado
        //return view('sobre')->withEmail($dado);
    }

    //Retorna a pagina contato
    public function contato ()
    {
        return view('contato');
    }
}
