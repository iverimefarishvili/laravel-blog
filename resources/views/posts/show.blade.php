@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="../css/bootstrap.css">
  
   
<div class="container">
        <div class="row">
             <div class="col-12">
              <img src="../../storage/app/public/image/{{$post->image}}" alt="image" style="width:500px;">
              </div>
        </div>

   </div>
<div class="form-group">
        <div class="form-group">
             <h1>{{ $post->title }}</h1>

        </div>

   </div>
<div class="form-group">
        <div class="form-group">
            {{$post->body}}

        </div>

   </div>
<form action="./{{$post->id}}/edit">
     @csrf
     
  <div class="form-group">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Edit Project</button>

        </div>

   </div>
   

</form>

@endsection