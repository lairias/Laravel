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
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>



<div class="container">
  <caption>List of People</caption>

</div>

<table class="table caption-top">
  <thead>
    <tr>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Sex</th>
      <th scope="col"Birthdate</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($personas as $item)
 <tr>
   <td>
    
     <a href="{{url('/people/edit/'.$item->COD_PERSONA)}}"> <i class="fas fa-edit"></i></a>
   </td>
   <td>
    
   
   <form  method="POST"  action="{{url('/people/del/'.$item->COD_PERSONA)}}" >
{{csrf_field()}}
 {{method_field('DELETE')}}
 <button type="submit"class="btn btn-outline-primary" id='sud' onclick="return confirm('Borrar')"   > <i class="fas fa-trash-alt"> </i></button>

  </form>
    
   </td>

   <td>
     {{$item->FOT_PERSONA}}
   </td>

   <td>
     {{$item->NOM_PERSONA}}
   </td>
 
   <td>
     {{$item->APE_PERSONA}}
   </td>

   <td>
     {{$item->SEX_PERSONA}}
   </td>

   <td>
     {{$item->FEC_NACIMIENTO}}
   </td>
 </tr>
 @endforeach
  </tbody>
</table>




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