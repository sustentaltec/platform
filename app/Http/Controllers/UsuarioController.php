<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Configurações gerais do usuario
     */
    public function index()
    {

    }

    /**
     * Gestão da loja do usuário
     */
    public function loja()
    {

    }
}
