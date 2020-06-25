<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\user;
use Session;
use App\Products;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
       
        return view('products.index');
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
         $request->validate([
            'titulo' => 'required',
            'categoria'=>'required',
            'condicion'=>'required',
            'marca'=>'required',
            'descripcion'=>'required',
            'duracion'=>'required',
            'fechaInicio'=>'required',
            'precioInicial'=>'required',
            'precioReserva'=>'required',
            'cantidad'=>'required',
            // 'refundSwitch'=>'required',
            'Destino'=>'required',
            'Alto'=>'required',
            'Ancho'=>'required',
            'Largo'=>'required',
            'Peso'=>'required',
            'geografi' => 'required'
        ]);
          

 
            DB::table('products')->updateOrInsert(
                [
                'titulo'=>request()->input('titulo'),
                'categoria'=>request()->input('categoria'),
                'condicion'=>request()->input('condicion'),
                'marca'=>request()->input('marca'),
                'descripcion'=>request()->input('descripcion'),
                'duracion'=>request()->input('duracion'),
                'fechaInicio'=>request()->input('fechaInicio'),
                'precioInicial'=>request()->input('precioInicial'),
                'precioReserva'=>request()->input('precioReserva'),
                'cantidad'=>request()->input('cantidad'),
                // 'refundSwitch'=>request()->input('refundSwitch'),
                'Destino'=>request()->input('Destino'),
                'Alto'=>request()->input('Alto'),
                'Ancho'=>request()->input('Ancho'),
                'Largo'=>request()->input('Largo'),
                'Peso'=>request()->input('Peso'),
                'geografi'=>request()->input('geografi')

            ]);
              // dd($request);
            Session::flash('message','guardada con exito.');
            return redirect()->route('product.index');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
