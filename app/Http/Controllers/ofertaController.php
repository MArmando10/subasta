<?php

namespace App\Http\Controllers;

use DB;
use App\Oferta;
use App\Product;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ofertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
       
        $oferta = DB::table('ofertas')->Paginate(10);
        
        $p = $request->p;
        // $products = Product::all();
        $products = \App\User::all(); 
        dd($oferta); 
        // $v = $request->v;
        // dd($productos[0]->ofertas);

        return view('ofertas.index',compact('oferta','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->oferta);
        $request->validate([
            'oferta' => 'required',
        ]);
            $oferta = new Oferta();
            $oferta->user_id = \Auth::user()->id;
            //$oferta->product_id = \Auth::user();
            $oferta->product_id =request()->input('product_id');
            $oferta->oferta = request()->input('oferta');
            // $oferta = Input::get('oferta', 'default oferta');
            $oferta -> save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $oferta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function edit(Oferta $oferta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oferta $oferta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $oferta)
    {
        //
    }
}
