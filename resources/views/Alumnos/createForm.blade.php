<h1>{{$modo}} Alumno</h1>

<!-- Llamamos a los errores-->
@if(count($errors)>0)
    <div class="alert-danger" role="alert">
        <ul>
            @foreach( $errors->all() as $error)
                <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <!-- Formulario -->
    <label for="Nombres">{{'Nombres'}}</label> <!--Validamos que si no existe un registro muestre un form nuevo, el old nos sirve para recuperar lo que escribimos y si ns falto un dato-->
    <input type="text" class="form-control" name="Nombres" value="{{isset($alumnos->Nombres)?$alumnos->Nombres:old('Nombres')}}" id="Nombres">
    <br>
</div>


<div class="form-group">
    <label for="PrimerApellido">{{'Primer Apellido'}}</label>
    <input type="text" class="form-control" name="PrimerApellido" value="{{isset($alumnos->PrimerApellido)?$alumnos->PrimerApellido:old('PrimerApellido')}}" id="PrimerApellido">
    <br>
</div>

<div class="form-group">
    <label for="SegundoApellido">{{'Segundo Apellido'}}</label>
    <input type="text" class="form-control" name="SegundoApellido" value="{{isset($alumnos->SegundoApellido)?$alumnos->SegundoApellido:old('SegundoApellido')}}" id="SegundoApellido">
    <br>
</div>

<div class="form-group">
    <label for="CorreoElectronico">{{'Correo Electronico'}}</label>
    <input type="text" class="form-control" name="CorreoElectronico" value="{{isset($alumnos->CorreoElectronico)?$alumnos->CorreoElectronico:old('CorreoElectronico')}}" id="CorreoElectronico">
    <br>
</div>

<div class="form-group">
    <label for="Celular">{{'Celular'}}</label>
    <input type="text"  class="form-control" name="Celular" value="{{isset($alumnos->Celular)?$alumnos->Celular:old('Celular')}}" id="Celular">
    <br>
</div>

<div class="form-group">
    <label for="Direccion">{{'Direccion'}}</label>
    <input type="text" class="form-control" name="Direccion" value="{{isset($alumnos->Direccion)?$alumnos->Direccion:old('Direccion')}}" id="Direccion">
    <br>
</div>

<label for="Roles">{{'Roles'}}</label>
<select class="form-control" name="Roles" value="{{isset($alumnos->Roles)?$alumnos->Roles:''}}" id="Roles">
    <option>Estudiante</option>
    <option>Repitente</option>
    <option>Catedratico</option>
    <option>Coordinador</option>
    <option>Direcctivo</option>
</select>

    <!-- Boton que nos servira para enviar la informacion -->
    <input type="submit" class="btn btn-success" value="{{$modo}} alumno"><!--$modo nos sirve para modifcar el boton del form a Editar-->

    <a href="{{url('Alumnos')}}"class="btn btn-primary"> Regresar</a>

