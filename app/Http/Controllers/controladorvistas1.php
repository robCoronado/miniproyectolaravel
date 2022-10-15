<?php

namespace App\Http\Controllers;
use App\Models\Libro;


use Illuminate\Http\Request;

class controladorvistas1 extends Controller
{
    public function vista1()
    {
        return view('vista1');
    }

    public function vista2()
    {
        return view('vista2');
    }

    public function vista3()
    {
        return view('vista3');
    }

    public function vista4()
    {
        return view('vista4');
    }

    public function vista5()
    {
        return view('vista5');
    }

    public function vista6()
    {
        return view('vista6');
    }
    public function registrarlibro()
    {
        return view('registrarlibro');

    }

    public function guardarlibro(Request $request)
    {
        $libros = new Libro;
        $libros->nombre=$request->input('nombre');
        $libros->genero=$request->input('genero');
        $libros->editorial=$request->input('editorial');
        $libros->save();

        return redirect()->route('registrarlibro');
    }

    public function consultarlibros(){
        $libros = Libro::all();
        return view('consultar', compact('libros'));
    }

    public function eliminarLibro($id){
        $libro=Libro::find($id);
        $libro->delete();
        return redirect()->route('consultalibros');
    }

    public function modilibros($id){
        $libros=Libro::find($id);
        return view('muestra', compact('libros'));
    }

    public function editlibros(Request $request, $id)
    {
        $libros=Libro::find($id);
        $libros->nombre=$request->input('nombre');
        $libros->genero=$request->input('genero');
        $libros->editorial=$request->input('editorial');
        $libros->save();

        return redirect()->route('consultalibros');
    }


}
