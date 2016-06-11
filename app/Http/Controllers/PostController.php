<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    public function __construct(Request $request)
    {
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
        $this->user = Auth::user();   

        $posts = $this->user->posts()->get();

        return view('post.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware('auth');
        $this->user = Auth::user();   

        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->middleware('auth');
        $this->user = Auth::user(); 

        $post = new Post;

        $post->title = $request->title;
        $post->content = $request->content;
        $post->date = date('Y-m-d', time());
        $post->user()->associate($this->user);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = strtolower(str_replace(' ', '-', $request->title) . '.' . $file->getClientOriginalExtension());
            $destination_path = public_path() . '/photo';
            $file->move($destination_path, $file_name);

            $post->image = '/photo/' . $file_name;
        }

        $post->save();

        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('post.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->middleware('auth');
        $this->user = Auth::user(); 

        $post = Post::find($id);

        if( $this->user->id != $post->user_id )
            return redirect('home');

        return view('post.edit', [
            'post' => $post
        ]);
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
        $this->middleware('auth');
        $this->user = Auth::user(); 

        $post = Post::find($id);

        $post->title = $request->title;
        $post->content = $request->content;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = strtolower(str_replace(' ', '-', $request->title) . '.' . $file->getClientOriginalExtension());
            $destination_path = public_path() . '/photo';
            $file->move($destination_path, $file_name);

            $post->image = '/photo/' . $file_name;
        }

        $post->save();

        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->middleware('auth');
        $this->user = Auth::user(); 
        
        $post = Post::find($id);

        $post->delete();

        return redirect('post');
    }
}
