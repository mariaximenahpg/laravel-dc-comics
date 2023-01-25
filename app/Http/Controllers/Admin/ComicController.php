<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // prendo tutti i dati
        $data = $request->all();
        // creo l'oggetto model
        $new_comic = new Comic();
        // compilo l'oggetto (o meglio le sue proprietà)
        $new_comic->title= $data['title'];
        $new_comic->thumb= $data['thumb'];
        $new_comic->price= $data['price'];
        $new_comic->type= $data['type'];
        $new_comic->series= $data['series'];
        $new_comic->sale_date= $data['sale_date'];
        $new_comic->description= $data['description'];
        // salvo(creo a db la riga)
        $new_comic->save();
        // reindirizzo l'utente ad una pagina se la creazione è andata a buon fine, in questo caso show
        return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {   
        // $comic = Comic::find($id);
        // dd($comic);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //recupero dati del form
        $data = $request->all();
        // aggiorno la risorsa per intero
        $comic->update($data);
        // faccio un redirect alla pagina della risorsa aggiornata(show / index)
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
