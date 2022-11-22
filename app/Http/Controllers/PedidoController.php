<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pedido::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       
        
    }

    /**
     * Store a newly created resource in storage.
     * wsw
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Pedido();
      

        $product->id = $request->id;
        $product->id_usuario = $request->id_usuario;
        $product->fecha = $request->fecha;
        $product->costo_envio = $request->costo_envio;
        $product->monto = $request->monto;
        $product->status = $request->status;
        $product->id_tipopago = $request->id_tipopago;
        $product->direccion_envio =  $request->direccion_envio;

        if($product->save()){
            return response()->json([
                'Guardado' => 'Pedido Guardado con exito',
            ],200);
        }else{
            return response()->json([
                'error' => 'El pedido no se pudo guardar ',
            ],500);
        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    function search($id)
    {

        return Pedido::where('id_usuario',$id)->get();


    }
}
