<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $libros = Libro::all();
    return view('libros.index', compact('libros'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('libros.form');
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
      'titulo' => 'required',
      'autor' => 'required',
      'editorial' => 'required',
      'genero' => 'required',
      'isbn' => 'required',
      'edicion' => 'required',
      'anio' => 'required',
      'idioma' => 'required',
    ]);

    $libro = new Libro([
      'titulo' => $request->get('titulo'),
      'autor' => $request->get('autor'),
      'editorial' => $request->get('editorial'),
      'genero' => $request->get('genero'),
      'isbn' => $request->get('isbn'),
      'edicion' => $request->get('edicion'),
      'anio' => $request->get('anio'),
      'idioma' => $request->get('idioma'),
    ]);

    $libro->save();

    return redirect('/libros')->with('success', 'Libro guardado!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Libro  $libro
   * @return \Illuminate\Http\Response
   */
  public function show(Libro $libro)
  {
    return view('libros.show', compact('libro'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Libro  $libro
   * @return \Illuminate\Http\Response
   */
  public function edit(Libro $libro)
  {
    return view('libros.form', compact('libro'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Libro  $libro
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Libro $libro)
  {
    $request->validate([
      'titulo' => 'required',
      'autor' => 'required',
      'editorial' => 'required',
      'genero' => 'required',
      'isbn' => 'required',
      'edicion' => 'required',
      'anio' => 'required',
      'idioma' => 'required',
    ]);

    $libro->update($request->all());

    return redirect('/libros')->with('success', 'Libro actualizado!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Libro  $libro
   * @return \Illuminate\Http\Response
   */
  public function destroy(Libro $libro)
  {
    $libro->delete();

    return redirect('/libros')->with('success', 'Libro eliminado!');
  }
}
