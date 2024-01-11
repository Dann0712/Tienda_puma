<?php
// app/Http/Controllers/NavegacionController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegacionController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function producto()
    {
        return view('producto');
    }

    public function cliente()
    {
        return view('cliente');
    }

    public function vendedor()
    {
        return view('vendedor');
    }

    public function venta()
    {
        return view('venta');
    }

    public function detventa()
    {
        return view('detventa');
    }

    public function factura()
    {
        return view('factura');
    }

    public function nota()
    {
        return view('nota');
    }
}
