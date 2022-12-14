<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use App\Models\Morador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MoradorController extends Controller
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
    public function createMorador()
    {
        return view('createMorador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMorador(Request $request)
    {
        $apartamentos = Apartamento::where("id", $request->id_apto)->first();
        
        if(empty($apartamentos)){
            $moradors = Morador::all();
            $msg = "          Nao e possivel cadastrar morador em um apartamento nao existente!";
            return view('index', ['msg'=>$msg]);
        }

        Morador::create([
            'id_apto' => $request->id_apto,
            'nome' => $request->nome,
            'cpf'=> $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
        ]);
        $msg = "              Morador cadastrado com sucesso!";
        return view('index',['msg'=>$msg]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showMorador()
    {
        $moradors = Morador::all();
        return view('showMorador', ['moradors'=>$moradors]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editMorador($morador_id)
    {
        $morador = Morador::findOrFail($morador_id);
        return view('createMorador', ['morador' => $morador]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateMorador(Request $request, $id)
    {
        $morador = Morador::findOrFail($id);
        $apartamentos = Apartamento::where("id", $request->id_apto)->first();
        
        if(empty($apartamentos)){
            return Redirect::to('/morador/mostrar');
        }

        $morador->update([
            'id_apto' => $request->id_apto,
            'nome' => $request->nome,
            'cpf'=> $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
        ]);
        return Redirect::to('/morador/mostrar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyMorador($morador_id)
    {  
        
        try{
            //dd($morador_id);
            Morador::find($morador_id)->delete();
            return Redirect::to('/morador/mostrar');
        }
        catch(\Exception $e){
              report($e);
        }
 
    }
}