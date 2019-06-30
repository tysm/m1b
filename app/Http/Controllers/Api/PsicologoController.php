<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PsicologoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('api.psicologo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
        $data = Paciente::find($request->id);
        $data->create($request->all());

        return redirect('api.psicologo.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Paciente::find($id);
        $data->save($request->all());

        return redirect('api.psicologo.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Paciente::delete($id);
        return redirect('api.psicologo.index');
    }
}
