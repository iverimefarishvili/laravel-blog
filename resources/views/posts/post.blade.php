@extends('layouts.app')
@section('content')
 <h1>Posts</h1>
 @if(count($posts) > 0)
    @foreach($posts as $post)
     <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                      <div class="container">
                        <div class="row">
                        <div class="col-12">
                              <img src="../storage/app/public/image/{{$post->image}}" alt="imafe" style="width:200px;">
                        </div>
                        </div>

                        </div>
                        <h3><a href="./posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}}</small>
                    </div>
                </div>
            </div>
    @endforeach
  @else 
    <h1>No Posts Yet</h1>
  @endif
  <form  action="posts/create">
      {{ csrf_field() }}
      {{ method_field('PATCH')}}
<button type="submit" class="btn btn-primary">Create Post</button>
</form>

@endsection