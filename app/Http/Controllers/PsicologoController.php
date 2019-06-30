<?php

namespace App\Http\Controllers;

use App\Psicologo;
use Illuminate\Http\Request;

class PsicologoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $psicologos = Psicologo:all();
        return view('psicologos.index')->with(['psicologos' => $psicologos]);
=======
        Psicologo::all();
        return view('psicologos.index');
>>>>>>> 3427a4b304d6c99b3cf009ac3ec991ecfbe52992
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('psicologos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          Psicologo::create($request->all());

        return redirect()->route('psicologos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Psicologo  $psicologo
     * @return \Illuminate\Http\Response
     */
    public function show(Psicologo $psicologo)
    {
        //
    }
    public function search(Request $request){
        $search= $request->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Psicologo  $psicologo
     * @return \Illuminate\Http\Response
     */
    public function edit(Psicologo $psicologo)
    {
        $psicologo = Psicologo::find($id);
        return view('psicologos.edit')->with(['psicologo' => $psicologo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Psicologo  $psicologo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psicologo $psicologo)
    {
        
        $psicologo = Psicologo::find($id)->update($request->all());
        return redirect()->route('psicologos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Psicologo  $psicologo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psicologo $psicologo)
    {
        $psicologo = Psicologo::find($id)->delete();
        return redirect()->route('psicologos.index');
    }
}
