@extends('layouts.app')
@section('content')
<h1>Edit Project</h1>
<link rel="stylesheet" href="../../css/bootstrap.css">

    
<form method="POST" action="../../posts/{{$post->id}}">
@method('PATCH')
@csrf
<div class="form-group">
   <label class="label" for="title">Title</label>
   <div class="form-group">
   <input type="text" class="form-control" name="title" value="{{$post->title}}">

   </div>
   </div>
   <div class="form-group">
       <label class="label" for="description">Description</label>
       <div class="form-group">
           <textarea  class="form-control" name="body" value="{{$post->body}}">{{$post->body}}</textarea>

       </div>
   </div>
   <div class="form-group">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Project</button>

        </div>

   </div>



</form>
<form method="POST" action="../../posts/{{$post->id}}">
    @method('DELETE')
    @csrf
  <div class="form-group">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Delete Project</button>

        </div>

   </div>
</form>
@endsection