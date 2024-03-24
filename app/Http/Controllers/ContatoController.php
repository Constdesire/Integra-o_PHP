<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index(Request $req){
        $contact = Contato::all();
        return view('pmprojet')->with("contatos", $contact);
    }

    public function adicionar(Request $req){
        $contact = new Contato;
        $contact->nome = $req->nome;
        $contact->telefone = $req->telefone;
        $contact->origem = $req->origem;
        $contact->datacontato = $req->datacontato; 
        $contact->observacao = $req->observacao;
        $contact->save();
        return redirect()->back();
    }
}
