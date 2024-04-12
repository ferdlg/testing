<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompradorVendedorController extends Controller
{
    public function index()
    {
        return view('ini_comprador_vendedor');
    }
}
