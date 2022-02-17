<h1>{{$modo}} Alumno</h1>
<!-- Formulario -->
<label for="Nombres">{{'Nombres'}}</label> <!--Validamos que si no existe un registro muestre un form nuevo-->
<input type="text"  name="Nombres" value="{{isset($alumnos->Nombres)?$alumnos->Nombres:''}}" id="Nombres">
<br>

<label for="PrimerApellido">{{'Primer Apellido'}}</label>
<input type="text"  name="PrimerApellido" value="{{isset($alumnos->PrimerApellido)?$alumnos->PrimerApellido:''}}" id="PrimerApellido">
<br>


<label for="SegundoApellido">{{'Segundo Apellido'}}</label>
<input type="text"  name="SegundoApellido" value="{{isset($alumnos->SegundoApellido)?$alumnos->SegundoApellido:''}}" id="SegundoApellido">
<br>

<label for="CorreoElectronico">{{'Correo Electronico'}}</label>
<input type="text"  name="CorreoElectronico" value="{{isset($alumnos->CorreoElectronico)?$alumnos->CorreoElectronico:''}}" id="CorreoElectronico">
<br>

<label for="Celular">{{'Celular'}}</label>
<input type="text"  name="Celular" value="{{isset($alumnos->Celular)?$alumnos->Celular:''}}" id="Celular">
<br>


<label for="Direccion">{{'Direccion'}}</label>
<input type="text" name="Direccion" value="{{isset($alumnos->Direccion)?$alumnos->Direccion:''}}" id="Direccion">
<br>

<label for="Roles">{{'Roles'}}</label>
<select class="form-control" name="Roles" value="{{isset($alumnos->Roles)?$alumnos->Roles:''}}" id="Roles">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
</select>

<!-- Boton que nos servira para enviar la informacion -->
<input type="submit" value="{{$modo}} alumno"><!--$modo nos sirve para modifcar el boton del form a Editar-->

<a href="{{url('Alumnos')}}"> Regresar</a>
