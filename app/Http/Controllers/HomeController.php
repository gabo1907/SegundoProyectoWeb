<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarea;
use App\Entrega;
use App\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bandera = 0;
        $id = Auth::user()->id;
        $entregas=Entrega::where('user_id',$id)->get();
        $tareas =Tarea::all();

        return view('home',['tareas'=>$tareas, 'entregas'=>$entregas,'bandera'=>$bandera]);
    }

    public function grades($id){
        $entregas=Entrega::all();
        $user=User::findOrFail($id);
        return view('grades',['entregas'=>$entregas,'user'=>$user]);
    }
}
