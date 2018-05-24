<?php

namespace App\Http\Controllers;


use App\Movie;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $peliculas = Movie::all();
        return view('catalog.index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelicula           = new Movie;
        $pelicula->title    = $request->input('title');
        $pelicula->year     = $request->input('year');
        $pelicula->director = $request->input('director');
        $pelicula->poster   = $request->input('poster');
        $pelicula->synopsis = $request->input('synopsis');
        $pelicula->save();

        return redirect('/catalog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula = Movie::findOrFail($id);
        return view('catalog.show', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula = Movie::findOrFail($id);
        return view('catalog.edit', compact('pelicula'));
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
        $pelicula           = Movie::findOrFail($id);
        $pelicula->title    = $request->input('title');
        $pelicula->year     = $request->input('year');
        $pelicula->director = $request->input('director');
        $pelicula->poster   = $request->input('poster');
        $pelicula->synopsis = $request->input('synopsis');
        $pelicula->save();

        return redirect('/catalog/show/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
