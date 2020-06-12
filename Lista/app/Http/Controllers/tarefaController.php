<?php

namespace App\Http\Controllers;

use App\tarefa;
use Illuminate\Http\Request;

class tarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefa = tarefa::all();
        return view('index' ,compact('tarefa'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
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

            'titulo'=> 'required',
            'mensagem' =>'required'

        ]);

        $tarefa = new tarefa;

            $tarefa->titulo=$request->get('titulo');
            $tarefa->mensagem=$request->get('mensagem');


        $tarefa -> save();
        return redirect('/tarefa')->with('success' , 'Registrado!');

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
        $tarefa = tarefa::find($id);
        return view('edit', compact('tarefa'));
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
        $request->validate([

            'titulo'=>'required',
           'mensagem'=>'required'

        ]);

        $tarefa = tarefa ::find($id);
        $tarefa->titulo = $request->get('titulo');
        $tarefa->mensagem = $request->get('mensagem');
        // $tarefa->update();  //Salvar no Mysql
        // $tarefa->pull();  //Salvar no Mongodb


        $tarefa->update();
        return redirect('/tarefa')->with('success', 'Atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarefa = tarefa::find($id);
        // dd($tarefa);
        // $tarefa->delete();  //Deletar no Mysql

        // $tarefa->destroy();  //Deletar no Mongodb
        $tarefa->delete();

        return redirect('/tarefa')->with('success', 'Deletado!');
    }
}
