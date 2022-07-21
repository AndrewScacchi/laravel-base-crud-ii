<?php

namespace App\Http\Controllers;

use App\Comic;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //$request->all() ci permette di prendere solo i dati del FORM
        $formData = $request->all();
        //dd($request) --> see how many data are here!
        $newcomic = new Comic();
        $newcomic->title = $formData['title'];
        $newcomic->description = $formData['description'];
        $newcomic->thumb = $formData['thumb'];
        $newcomic->price = $formData['price'];
        $newcomic->series = $formData['series'];
        $newcomic->sale_date = $formData['sale_date'];
        $newcomic->type = $formData['type'];
        $newcomic->save();

        // Why not simple return view? because in return(view) you are STILL INTO this methods, if page refresh, resend module, INCORRECT BEHAVIOUR
        //return redirect()->route('home');

        return redirect()->route('comics.show', ['comic' => $newcomic]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comic = Comic::find($id); // ::findOrFail($id);
        //this litte notation checks if the id exist, if not 404
        if(!$comic) abort(404);

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
        //
        // $comic = Comic::find($id);
        // if(!$comic) abort(404);
        //you can avoid the above two by using dependency injection on argument edit(Comic $comic) laravel automate the dep inj
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $formData = $request->all();
        //dd($request) --> see how many data are here!
        $comic->update($formData);
        return redirect()->route('comics.show' , ['comic'=> $comic]);
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

        return redirect()->route('home');
    }
}
