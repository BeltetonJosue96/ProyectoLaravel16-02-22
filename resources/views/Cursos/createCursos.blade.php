@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ url('/Cursos') }}" method="post" enctype="multipart/form-data">

            <!-- Control de seguridad-->
        @csrf

            <h1>Registrar Curso</h1>
            <hr>
            <div class="form-group">
                <!-- Formulario -->
                <label for="Curso">{{'Curso'}}</label> <!--Validamos que si no existe un registro muestre un form nuevo, el old nos sirve para recuperar lo que escribimos y si ns falto un dato-->
                <input type="text" class="form-control" name="Curso" value="{{isset($cursos->Curso)?$cursos->Curso:old('Curso')}}" id="Curso">
                <br>
            </div>

            <div class="form-group">
                <label for="Profe">{{'Profe'}}</label>
                <input type="text" class="form-control" name="Profe" value="{{isset($cursos->Profe)?$cursos->Profe:old('Profe')}}" id="Profe">
                <br>
            </div>

            <div class="form-group">
                <label for="Horario">{{'Horario'}}</label>
                <input type="text" class="form-control" name="Horario" value="{{isset($cursos->Horario)?$cursos->Horario:old('Horario')}}" id="Horario">
                <br>
            </div>

            </select>

            <!-- Boton que nos servira para enviar la informacion -->

            <input href="{{url('Cursos')}}" type="submit" class="btn btn-success" value="Guardar"><!--$modo nos sirve para modifcar el boton del form a Editar-->

            <a href="{{url('Alumnos')}}"class="btn btn-primary"> Regresar</a>

        </form>

    </div>

@endsection


