<?php

namespace App\Http\Controllers;
use App\Http\Requests\ComicsRequest;
use App\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::all();
        // $comics = Comics::orderByDesc('id')->get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ComicsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicsRequest $request)
    {
        // validazione dati inseriti dall'utente


        // salviamo i dati
        $validated_data = $request->validated();
        Comics::create($validated_data);

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function show(Comics $comics)
    {
        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ComicsRequest  $request
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(ComicsRequest $request, Comics $comic)
    {
        $validated_data = $request->validated();

        $comic->update($validated_data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
