<?php

namespace App\Http\Controllers;


use App\Models\Apartamento;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;
use App\Http\Controllers\DB;

class ApartamentoController extends Controller
{
    private $objPredio;
    private $objApto;
    private $objMorador;
    
    public function __construct()
    {
        $this->objPredio = new Apartamento();
    }

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
    public function editApartamento($id)
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
    public function updateApartamento(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyApartamento($id)
    {
        $apartamento = Apartamento::findOrFail($id);
        $apartamento->delete();
        return view('index');
    }
}
