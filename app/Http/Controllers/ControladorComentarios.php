<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ControladorComentarios extends Controller
{       
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios = Comentario::all();
        return view("forum/judo", compact("comentarios"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comentarios = Comentario::all();
        return view('forum/judo', compact('comentarios'));
    }

    public function store(Request $request)
    {
      $validated = $request->validate([
        'texto' => 'required|max:255',
      ]);
      if ($validated) {
        $comentarios = new Comentario();
        $comentarios->texto = $request->get('texto');
        $comentarios->save();
        return redirect('comentarios');
      }
    }
 
}
