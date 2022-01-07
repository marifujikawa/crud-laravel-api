<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTesteRequest;
use App\Http\Requests\UpdateTesteRequest;
use App\Models\Teste;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testes = Teste::all();
        return response()->json(["testes" => $testes], 200);
    }

    public function store(StoreTesteRequest $request)
    {
        $data=$request->all();
        $teste=Teste::create($data);
        return response()->json(["teste"=>$teste], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teste  $teste
     * @return \Illuminate\Http\Response
     */
    public function show(Teste $teste)
    {
        return response()->json(["teste"=>$teste], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTesteRequest  $request
     * @param  \App\Models\Teste  $teste
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTesteRequest $request, Teste $teste)
    {
        $data=$request->all();
        $teste->update($data);
        return response()->json(["teste" => $teste], 200);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teste  $teste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teste $teste)
    {
        $deleted= $teste->delete();
        return response()->json(["deleted"=>$deleted], 203);
    }
}
