<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function index()
    {
        $carrinho = Carrinho::paginate(8);
        return view('carrinho.index',array('carrinho' => $carrinho,'busca'=>null));
    }

    
    
    public function show($id)
    {
        $carrinho = Carrinho::find($id);
        return view('carrinho.show',array('carrinho' => $carrinho));
    }
}
