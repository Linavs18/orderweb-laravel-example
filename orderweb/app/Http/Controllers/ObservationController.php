<?php

namespace App\Http\Controllers;

use App\Models\Observation;
use Illuminate\Http\Request;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $observations = Observation::all();
        return view('observation.index', compact('observations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('observation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $observations = Observation::create($request->all());
        session()->flash('message', 'Observacion creada exitosamente');
        return redirect()->route('observation.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $observation = Observation::find($id);
        if($observation) //si existe
        {
            return view('observation.edit', compact('observation'));
        }
        else
        {
            session()->flash('warning', 'No se encuentra la observacion solicitado');
            return redirect()->route('observation.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $observation = Observation::find($id);
        if($observation) //si existe
        {
            $observation->update($request->all());
            session()->flash('message', 'Observacion actualizado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra la observacion solicitado');
            return redirect()->route('observation.index');
        }

        return redirect()->route('observation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $observation = Observation::find($id);
        if($observation) //si existe
        {
            $observation->delete();
            session()->flash('message', 'Observacion eliminado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el observacion solicitado');
            return redirect()->route('observation.index');
        }
        
        return redirect()->route('observation.index');
    }
}
