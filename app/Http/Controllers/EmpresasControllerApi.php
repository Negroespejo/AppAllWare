<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresasControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $empresas = Empresa::latest()->paginate(5); // Empresa es el controllador del modelo

       return view('empresas.index', compact('empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
         Empresa::create([
            'nombre' => request('nombre'),
            'num_empleados' => request('num_empleados'),
            'tipo' => request('tipo'),
            'token' => request('_token'),
        ]);

         return redirect()->route('empresas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresas = Empresa::findOrFail($id); // consulta a la tabla Empresas 

            return view('empresas.show', [
                'empresas' => $empresas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Empresa $empresas)
    {
        $empresas-> update([
            'nombre' => request ('nombre'),
            'num_empleados' => request ('num_empleados'),
            'tipo' => request ('tipo'),
        ]);

          return redirect()->route('empresas.show', $empresas); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresas)
    {
        $empresas->delete();

        return redirect()->route('empresas.index'); 
    }
}
