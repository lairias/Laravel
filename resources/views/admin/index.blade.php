@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            
  <div >
   
    <div class="mb-3 col-9">
      <label for="exampleInputEmail1" class="form-label">ID</label>
      <input type="text" name="ID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0000-0000-0000">
    </div>
    <div class="mb-3 col-4">
      <label for="exampleInputPassword1" class="form-label">Primer Nombre</label>
      <input type="text" name="NOM_PERSONA" class="form-control" id="exampleInputPassword1" placeholder="Primer Nombre">
    </div>
    <div class="mb-3 col-4">
      <label for="exampleInputPassword1" class="form-label">Segundo  Nombre</label>
      <input type="text" name="APE_PERSONA" class="form-control" id="exampleInputPassword1" placeholder="Segundo Nombre">
    </div>

    <label for="exampleInputPassword1" class="form-label">Sexo</label>
    <select name="SEX_PERSONA" class="form-select col-4" aria-label="Default select example">
  <option selected>-----</option>
  <option value="F">Femenino</option>
  <option value="M">Masculino</option>
</select>

<div class="mb-3 col-4">
      <label for="exampleInputPassword1" class="form-label">Fecha Nacimiento</label>
      <input type="date" name="FEC_NACIMIENTO" class="form-control" id="exampleInputPassword1">
    </div>
    
<label for="exampleInputPassword1" class="form-label">Numero Telefonico</label>
<div class="input-group flex-nowrap p-2">
  <span class="input-group-text" id="addon-wrapping">+504</span>
  <input type="text" class="form-control" placeholder="Username" name="NUM_TELEFONO" aria-label="--------" aria-describedby="addon-wrapping">
</div>

    <label for="exampleInputPassword1" class="form-label">Tipo Telefono</label>
    <select name="TIP_TELEFONO" class="form-select col-4" aria-label="Default select example">
      <option selected>-----</option>
      <option value="P">Personal</option>
      <option value="C">Hogar</option>
    </select>

    <label for="exampleInputPassword1" class="form-label">Descripcion Telefono</label>
    <div class="input-group p-2">
    
      <textarea name="DES_TELEFONO"class="form-control" aria-label="With textarea" placeholder="Opcional"></textarea>
</div>
    <label for="exampleInputPassword1" class="form-label">Correo Electronico</label>
<div class="input-group flex-nowrap p-2">
  <span class="input-group-text" id="addon-wrapping">@</span>
  <input name="" type="text" class="form-control" placeholder="ejemplo@ejem.com " aria-label="Username" aria-describedby="addon-wrapping">
</div>


<div class="mb-3 col-6">
      <label for="exampleInputPassword1" class="form-label">Domino Correo</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="...@gmail.com">
    </div>


     <div class="mb-3 col-4">
      <label for="exampleInputPassword1" class="form-label">Usuario</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
    </div>
    
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="mb-3 row">
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
    </div>

     <label for="exampleInputPassword1" class="form-label">Tipo Usuario</label>
    <select class="form-select col-4" aria-label="Default select example">
      <option selected>-----</option>
      <option value="1">Empleado</option>
      <option value="2">Administrador</option>
    </select>

     <div class="mb-3 col-8">
      <label for="exampleInputPassword1" class="form-label">Fotografia</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Fotografia">
    </div>
    
  </div>
  <div class="modal-footer">
  
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>
    </div>
  </div>
</div>
</div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>
@stop

@section('content')
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

