<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * COMPRAS.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function compras()
    {
        return view('compras');
    }

    /**
     * VENTAS.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ventas()
    {
        return view('ventas');
    }

    /**
     * NUEVO CLIENTE.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ncliente()
    {
        return view('ncliente');
    }

    /**
     * NUEVO PROVEEDOR.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function nproveedor()
    {
        return view('nproveedor');
    }

    /**
     * NUEVA CATEGORIA.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ncategoria()
    {
        return view('ncategoria');
    }

    /**
     * PRODUCTO ALMACEN.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pro_almac()
    {
        return view('pro_almac');
    }

    /**
     * NUEVo PRODUCTO.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function nproducto()
    {
        return view('nproducto');
    }

    /**
     * REPORTES.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function reportes()
    {
        return view('reportes');
    }

    /**
     * CONFIGURACION.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function configuracion()
    {
        return view('configuracion');
    }
}
