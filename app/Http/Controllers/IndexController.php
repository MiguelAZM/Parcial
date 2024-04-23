<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function mostrar_todos(){
        $productos=Productos::all();

        return view('index',['productos'=> $productos]); 
        
    } 

    public function show(string $id)
    {
        $productos = Productos::findOrFail($id);
        return view('productos_id', ['productos' => $productos]);
    }

    public function create()
    {
        
        return view('agregar_p'); 
    }

    public function store(Request $request)
    {
        $producto=new Productos;
        $producto->nombre=$request->input('nombre');
        $producto->marca=$request->input('marca');
        $producto->tipo=$request->input('tipo');
        $producto->descripcion=$request->input('descripcion');
        $producto->save();
        // Redirigir a una página de éxito o a la lista de productos
        return redirect()->route('index')->with('success', 'Producto agregado correctamente');
    }

    public function edit(string $id)
    {
        $productos = Productos::findOrFail($id);
        return view('modificar_p', ['productos' => $productos]);
    }

    public function update(Request $request, string $id)
    {
        $productos = Productos::findOrFail($id);
    
        $request->validate([
            'nombre' => 'required', 
            'marca' => 'required',
            'tipo' => 'required',
            'descripcion' => 'required']);
    
        $productos->update([
            'nombre' => $request->nombre,
            'marca' => $request->marca,
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion,]);
        return redirect()->route('index')->with('success', 'Producto actualizado correctamente');
    }




}
