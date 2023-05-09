<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlimentoController extends Controller
{
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        User::find(Auth::user()->id)
           ->myAlimento()
           ->create([
              'nome_da_refeicao' => $request -> nome_da_refeicao,
              'descricao' => $request -> descricao,
              'horario' => $request -> horario,
              'caloria' => $request -> caloria
           ]);
           return redirect (route('dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function show(Alimento $alimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Alimento $alimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alimento $alimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alimento = Alimento::findOrFail($id);
        $alimento -> delete();

        return redirect (route('dashboard'));
    }
}
