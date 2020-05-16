<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Se importa el modelo
use App\Entrega;
use App\Tarea;
class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // Esta variable contiene tosos los datos de la table
        $tareas=Tarea::all();
        //Se especifica la ruta y cada punto equivale a una diagonal
        return view('admin.tareas.index',['tareas'=>$tareas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tareas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tarea = new Tarea();
        //Los inputs siempre deben detener un nombre
        $tarea->title=request($key='title');
        $tarea->description=request($key='description');
        $tarea->time=request($key='time');
        $tarea->date=request($key='date');
        $tarea->filetype=request($key='filetype');
        // Para guardar el archivo es necesario hacer lo siguiente
        if($request->hasFile('file')){
            $file = request($key='file');
            $name = $file->getClientOriginalName();
            // Todo lo que se muestra en lapágina se guarda en la carpeta de Public, para eso se creó una carpeta "tareas"
            $destination = public_path().'/tareas';
            $file->move($destination,$name);
            // Guardando el nombre del archivo
           $tarea->file=$name;
        }
        // Guardando todos los cambios 
        $tarea->save();
        return redirect('admintareas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // El nombre entre comillas es para el HTML
        return view('admin.tareas.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Esto es para mostrar los campos a editar
        $tarea=Tarea::findOrFail($id);
        //Update se encarga de mostrar el forulario
        return view('admin.tareas.edit', ['tarea' => $tarea]);
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
        //
         //Le asignamos la tarea a editaro actualizar
        $tarea = Tarea::findOrFail($id);
        //Los inputs siempre deben detener un nombre
        $tarea->title=request($key='title');
        $tarea->description=request($key='description');
        $tarea->time=request($key='time');
        $tarea->date=request($key='date');
        $tarea->filetype=request($key='filetype');
        // Para guardar el archivo es necesario hacer lo siguiente
        if($request->hasFile('file')){
            $file = request($key='file');
            $name = $file->getClientOriginalName();
            // Todo lo que se muestra en lapágina se guarda en la carpeta de Public, para eso se creó una carpeta "tareas"
            $destination = public_path().'/tareas';
            $file->move($destination,$name);
            // Guardando el nombre del archivo
            $tarea->file=$name;
        }
        // Guardando todos los cambios 
        $tarea->update();
        return redirect('admintareas');
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
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();
        return redirect('admintareas');
    }
}
