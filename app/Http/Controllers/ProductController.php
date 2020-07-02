<?php

namespace App\Http\Controllers;

use DB;
use Auth;
//use App\User;
use Session;
use App\imagen;
use Carbon\carbon;
use App\Product;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\LengthAwarePaginator;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Products = DB::table('products')->Paginate(4);
        // $p = $request->p;
        
        $Users = \App\User::with(['products' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])->get();
        return view('products.index',compact('Users','Users','Products','p'));
     
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
            'geografi' => 'required',
            'images' => 'required',
        ]);
        
        //dd($request);
        $files = $request->file('images');

        $producto = new Product();
          
        $producto->titulo  =request()->input('titulo');
        $producto->categoria =request()->input('categoria');
        $producto->condicion =request()->input('condicion');
        $producto->marca =request()->input('marca');
        $producto->descripcion =request()->input('descripcion');
        $producto->duracion =request()->input('duracion');
        $producto->fechaInicio =request()->input('fechaInicio');
        $producto->fechaFinal =request()->input('fechaFinal');
        $producto->precioInicial =request()->input('precioInicial');
        $producto->precioReserva =request()->input('precioReserva');
        $producto->cantidad =request()->input('cantidad');
        $producto->Destino =request()->input('Destino');
        $producto->Alto =request()->input('Alto');
        $producto->Ancho =request()->input('Ancho');
        $producto->Largo =request()->input('Largo');
        $producto->Peso =request()->input('Peso');
        $producto->geografi =request()->input('geografi');
        $producto->user_id = Auth::user()->id;

        $producto->save();
        
        

        //return $files[0];
        //return $files[0]->getClientOriginalName();


            // DB::table('products')->updateOrInsert(
            //     [
            //     'titulo'=>request()->input('titulo'),
            //     'categoria'=>request()->input('categoria'),
            //     'condicion'=>request()->input('condicion'),
            //     'marca'=>request()->input('marca'),
            //     'descripcion'=>request()->input('descripcion'),
            //     'duracion'=>request()->input('duracion'),
            //     'fechaInicio'=>request()->input('fechaInicio'),
            //     'precioInicial'=>request()->input('precioInicial'),
            //     'precioReserva'=>request()->input('precioReserva'),
            //     'cantidad'=>request()->input('cantidad'),
            //     // 'refundSwitch'=>request()->input('refundSwitch'),
            //     'Destino'=>request()->input('Destino'),
            //     'Alto'=>request()->input('Alto'),
            //     'Ancho'=>request()->input('Ancho'),
            //     'Largo'=>request()->input('Largo'),
            //     'Peso'=>request()->input('Peso'),
            //     'geografi'=>request()->input('geografi'),
            //     'images'=>request()->input('images'),

            // ]);
            foreach ($files as $file) {

                $archivo = Storage::putFile('imagenes', $file);

                $imagen = new imagen();
                $imagen->nombre = $file->getClientOriginalName();
                $imagen->url = $archivo;
                $imagen->product_id = $producto->id;
                
                $imagen->save();
            }
            //return "ID:  ".$producto->id;

            //     DB::table('imagens')->updateOrInsert(
            //     [
            //         'nombre'=> $file->getClientOriginalName(),
            //         'url' => $file ,
            //         'producto_id' => $producto->id,

            // ]);
        
              //dd($request);
            Session::flash('message','guardada con exito.');
            return redirect()->route('product.index');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product )
    {
            $Product = product::where('titulo',$product)->paginate(6);//mandamos llamar la variable product, y le indicamos los renglones del formulario
            // $Products = Products::find($products);
            // dd($product);
            $now = now();
            $ldate = date('Y-m-d H:i:s');
            return view('products.show',compact('Products','product','now'));
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
        // dd($product);
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
        // dd($request);
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


    function searchBuscar(Request $request) {

        Session::forget('message');    
        $anterior = $request->all();
        if($request->categoria != "" )
        {    
           $producto = producto::when($request->categoria,function($query,$request){return $query->where('categoria','like', $request .'%');})
           ->orderBy('categoria', 'ASC')
           ->paginate(10)
           ->setPath ( '' );
            $producto->appends ( array (
            'categoria ' => $request->categoria
            ) );
         }
             if(isset($producto)){
               $count = $producto->total();
             }else{
                 $count = 0;
              }

             if ($count  > 0){
                 Session::flash('message','Se encontraron '.$count.' registros en la busqueda.');
      
                return view('products.index',compact('productos','anterior'));
             }
             else{
                 Session::flash('message','No se encontraron registros en la busqueda.');
      
                         return view('products.index',compact('anterior'));
             }
          return redirect()->route('products.productsView');
        }



        public function getLicenseExpireAttribute($tiempo)
        {
            return Carbon::parse($tiempo);
        }

        
}
