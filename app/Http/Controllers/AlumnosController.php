<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

/*SE AGREGO ESTA LIBRERIA*/
use Illuminate\Support\Facades\Input;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()

    {   #PASO 2 para llamar a la base de datos
        $datos['alumnos']=Alumnos::paginate(100);

        #A return le agregamos el $alumnos para darle info
        return view('Alumnos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function create()
    {
        return view('Alumnos.createAlumnos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */





    #PASO 1
    public function store(Request $request)
    {/* * Nos servira para almacenartodo lo que enviemos al metodo Store del html**/

        /*Le colocamos la exepcion para que no nos recolecte sin el token*/
        $datosAlumno = request()->except('_token');

        /*Guarda en la base de datos pero no el token*/
        Alumnos::insert($datosAlumno);

        /* retornamos una respuesta*/
      //  return response()->json($datosAlumno);
        return redirect('Alumnos')->with('mensaje', 'Alumno Agregdo Correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */







    public function show(Alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */






    public function edit($id)
    {/*Lo que hacemos es rellenar el formulario con los datos*/
        $alumnos=Alumnos::findOrFail($id);

        return view('Alumnos.edit',compact('alumnos'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */




    public function update(Request $request,  $id)
    {
        $datosAlumno = request()->except(['_token','_method']);
        #Buscamos la info con el id que le pasamos y luego actualizamos
        Alumnos::where('id','=',$id)->update($datosAlumno);

        #Enotnces volvemos a buscar la info pero esta vez actualizados
        $alumnos=Alumnos::findOrFail($id);

        return view('Alumnos.edit',compact('alumnos'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */



    #Paso de borrar; se recibe el id del index (solo recibimos el id)
    public function destroy($id)
    {
        Alumnos::destroy($id);

        #Retornamos a la pagina
        return redirect('Alumnos')->with('mensaje', 'Alumno Eliminado Correctamente');
    }
}
