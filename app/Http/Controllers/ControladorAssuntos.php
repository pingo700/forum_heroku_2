<?php

namespace App\Http\Controllers;

use App\Models\Assunto;
use App\Models\User;
use Illuminate\Http\Request;

class ControladorAssuntos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assuntos = Assunto::all();
        return view("forum/perfil", compact("assuntos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assuntos = User::all();
        return view('forum/perfil', compact('assuntos'));
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
      $validated = $request->validate([
        'sobre' => 'required|max:255',
        'data' => 'required|date'
      ]);
      if ($validated) {
        $assuntos = new Assunto();
        $assuntos->sobre = $request->get('sobre');
        $assuntos->data = $request->get('data');
        $assuntos->save();
        return redirect('assuntos');
      }
    }
}
