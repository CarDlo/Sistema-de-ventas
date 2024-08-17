<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $paises = DB::table('countries')->get();
            $monedas = DB::table('currencies')->get();
            $estados = DB::table('states')->get();
            $ciudades = DB::table('cities')->get();
            return view('admin.empresas.create', compact('paises', 'monedas' , 'estados', 'ciudades'));
 
    }
    public function buscar_estado($id_pais){
        try{
            $estados = DB::table('states')->where('country_id', $id_pais)->get();
            return view('admin.empresas.cargar_estados', compact('estados'));
        }catch(\Exception $exception){
            return response()->json(['mensaje'=>'error']);
        }
    }
    public function buscar_ciudad($id_estado){
        try{
            $ciudades = DB::table('cities')->where('state_id', $id_estado)->get();
            return view('admin.empresas.cargar_ciudades', compact('ciudades'));
        }catch(\Exception $exception){
            return response()->json(['mensaje'=>'error']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //$datos = $request->all();
      //return response()->json($datos);
    
        $request->validate([
          'nombre_empresa' => 'required',
          'nit' => 'required|unique:empresas',
          'telefono' => 'required',
          'correo' => 'required|unique:empresas',
          'direccion' => 'required',
          'logo' => 'required|image|mimes:jpeg,png,jpg',
          'cantidad_impuesto' => 'required',
          'nombre_impuesto' => 'required',
          'tipo_empresa' => 'required',
          'moneda' => 'required',
          'ciudad' => 'required',
          'departamento' => 'required',
          'codigo_postal' => 'required',
          'pais' => 'required',
        ]);
        $empresa = new Empresa();
        $empresa->pais = $request->pais;
        $empresa->nombre_empresa = $request->nombre_empresa;
        $empresa->tipo_empresa = $request->tipo_empresa;
        $empresa->nit = $request->nit;
        $empresa->telefono = $request->telefono;
        $empresa->correo = $request->correo;
        $empresa->cantidad_impuesto = $request->cantidad_impuesto;
        $empresa->nombre_impuesto = $request->nombre_impuesto;
        $empresa->moneda = $request->moneda;
        $empresa->direccion = $request->direccion;
        $empresa->ciudad = $request->ciudad;
        $empresa->departamento = $request->departamento;
        $empresa->codigo_postal = $request->codigo_postal;
        $empresa->logo = $request->file('logo')->store('logos', 'public');


        $empresa->save();

        $usuario = new User();

        $usuario->name = "Admin";
        $usuario->email = $request->correo;
        $usuario->password = Hash::make($request['nit']);
        $usuario->empresa_id = $empresa->id;
        
        $usuario->save();

        //Auth()->login($usuario);
        Auth::loginUsingId($usuario->id);

        return redirect()->route('admin.index')
        ->with('info', 'La empresa se ha creado con exito');

    }



    
    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        $paises = DB::table('countries')->get();
        $monedas = DB::table('currencies')->get();
        $estados = DB::table('states')->get();
        //$ciudades = DB::table('cities')->get();
        $empresa_id = Auth::user()->empresa_id;
        $empresa = Empresa::where('id', $empresa_id)->first();
        $departamentos = DB::table('states')->where('country_id', $empresa->pais)->get();
        $ciudades = DB::table('cities')->where('state_id', $empresa->departamento)->get();
        return view('admin.configuraciones.edit', compact('paises', 'monedas' , 'estados', 'ciudades', 'empresa', 'departamentos'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
