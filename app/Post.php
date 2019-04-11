<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'image'];
    
    protected $table = 'posts';

    public $primaryKey = 'id';

    

    public $timestamps = true;
}
