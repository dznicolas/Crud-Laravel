<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Carros::all();
        return view('index',compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Carros::create(['modelo'=>$request->modelo, 'cor'=>$request->cor, 'ano'=>$request->ano, 'valor'=>$request->valor ]);
        return redirect()->route('carros.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dados = Carros::findOrFail($id);
        return view('info', compact('dados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dados = Carros::findOrFail($id);
        return view('edit', compact('dados'));
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
        $dados = Carros::findOrFail($id);
        $dados->update(['modelo'=>$request->modelo, 'cor'=>$request->cor, 'ano'=>$request->ano, 'valor'=>$request->valor ]);
        return redirect()->route('carros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dados = Carros::findOrFail($id);
        $dados->delete();
        return redirect()->route('carros.index');
    }
}
?>