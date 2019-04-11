<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.post')->with('posts', $posts);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {
        
        
         $this->validate(request(), [
                'title' => 'required',
                'body' => 'required',
                'image' => 'image|nullable|max:1999',
                

        ]);
        
        if(request()->hasfile('image'))
         {
             $ext = request()->file('image')->getClientOriginalName();
             $filename = pathinfo($ext, PATHINFO_FILENAME);

             $extension = request()->file('image')->getClientOriginalExtension();

             $filenameto = $filename.'_'.time().'.'.$extension;

             $path = request()->file('image')->storeAs('public/image', $filenameto);
             
            
         
        }
        Post::create([
             
            'title' => request('title'),
            'body' => request('body'),
            'image' => $filenameto
        ])->save();
        return redirect('posts');
        
        
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = request('title');
        
        $post->body = request('body');
        
        $post->save();
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect('/posts');
        
    }
}
