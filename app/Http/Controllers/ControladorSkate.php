<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorSkate extends Controller
{
    public function __construct () {
        $this->middleware(’auth’);
    }
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Comentarios::all();
        return view(’forum/skate’, compact(’dados’));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('forum/skate/create', compact('users'));
    }

    public function store(Request $request)
    {
      $validated = $request->validate([
        'data' => 'required|date'
      ]);
      if ($validated) {
        $skates = new Skate();
        $skates->data = $request->get('data');
        $skates->save();
        return redirect('comentarioss');
      }
    }
}
