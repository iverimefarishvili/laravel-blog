@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="../css/bootstrap.css">
    <form method="post" action="../posts" enctype="multipart/form-data">
        {{ csrf_field()}}
        
        <div class="form-group">
            <input type="text" class="form-control" name="title" value="">

         </div>
         <div class="form-group">
       
           
           <textarea  class="form-control" name="body" value=""></textarea>

                
        </div>
        <div class="form-group">
        <label>Upload Image</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="image" name="image">
                </span>
            </span>
            
        </div>
        
    </div>
    
   <div class="form-group">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Post</button>

        </div>

   </div>


    </form>


@endsection