<?php

namespace App\Http\Controllers;


use App\Models\Apartamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ApartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createApartamento()
    {
        return view('createApartamento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeApartamento(Request $request)
    {
        //DB::beginTransaction();
        //dd($request->nome_edificio);
        Apartamento::create([
            'nome_edificio' => $request->nome_edificio,
            'numero_apto' => $request->numero_apto,
        ]);
        
        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showApartamento()
    {
        $apartamentos = Apartamento::all();
        return view('showApartamento', ['apartamentos'=>$apartamentos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editApartamento($apartamento_id)
    {
        $apartamento = Apartamento::findOrFail($apartamento_id);
        return view('createApartamento', ['apartamento' => $apartamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateApartamento(Request $request, $id)
    {
        $apartamento = Apartamento::findOrFail($id);
        $apartamento->update([
            'nome_edificio' => $request->nome_edificio,
            'numero_apto' => $request->numero_apto,
        ]);
        return Redirect::to('/apartamento/mostrar');
    }
}
