<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class NoteController extends Controller
{
    // Recepciona un valor de la URL
    // public function index($id,$titel = null)
    // {
    //     return view('note.index', compact('id'));
        
    // }

    public function index(): View
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(): View
    {
        return view('note.create');
    }

    public function save(Request $request) : RedirectResponse
    {   
        
        // $note = new Note();
        // $note->title = - $request->title;
        // $note->description = $request->description;
        // $note->evento = $request->evento;
        // $note->save();

        // Note::create([
        //     'title'=> $request->title,
        //     'description' => $request->description,
        //     'evento' => $request->evento
        // ]);
        // // esta opcion se realiza si los name del formulario son iguales a los 
        // fillable del modelo
        
        // dd($request->description);
        Note::create($request->all());

        return redirect()->route('note.index');
    }

    public function edit(Note $note): View
    {
        /*DE esta forma le especificamos que sabemos que en la variable le estoy pasando un
        id, y al incluir Note en el parametro que es el modelo entonces automaticamente
        reconce que estamos busacando una nota con el id de la variable

        */

        return view('note.edit',compact('note'));
    }
    

    public function update(Request $request,Note $note) : RedirectResponse
    {
        //En note especifico que nota s eva actualizar y luego adentro todos los campos name del request 
        $note->update($request->all());
        return redirect()->route('note.index');

        // Hacerlo de forma con POO, y sin poner el modelo Note 
        // $note = Note::find($note);
        // $note->title = $request->title;
        // $note->description = $request->description;
        // $note->save();

    }

    public function show(Note $note): View
    {
        $note->all();
        return view('note.show',compact('note'));
    }

    public function delete(Request $request, Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('note.index');
    }
}
