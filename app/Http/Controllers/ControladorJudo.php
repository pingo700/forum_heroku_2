<?php

namespace App\Http\Controllers;


use App\Models\Comentario;
use Illuminate\Http\Request;

class ControladorJudo extends Controller
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
        $users = User::all();
        return view('forum/judo/create', compact('users'));
    }

    public function store(Request $request)
    {
      $validated = $request->validate([
        'data' => 'required|date'
      ]);
      if ($validated) {
        $judos = new Judo();
        $judos->data = $request->get('data');
        $judos->save();
        return redirect('comentarios');
      }
    }
 
}
