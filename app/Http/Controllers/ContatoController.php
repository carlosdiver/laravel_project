<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            ["nome"=>"Maria", "tel"=>"49330392"],
            ["nome"=>"Carlos", "tel"=>"25687412"],
            ["nome"=>"Eduardo", "tel"=>"98745235"]
        ];

        $contato = new Contato();
        dd($contato->lista());
        //dd($contato->lista()->nome);

        return view('contato.index', compact('contatos'));
    }
    public function criar(Request $req)
    {
        dd($req->all());
        return "Esse é o criar do ContatoController";
    }

    public function editar()
    {
        return "Esse é o editar do ContatoController";
    }
    
}
