<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Role;

class PostController extends Controller
{

    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $posts= Post::all();
       
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        // dd($user);
        if(!$user->can('write post')) {
          abort(403);
        }

        return view('posts.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post= Post::create([
            'title' => $request->input('title'),
            'body'=>$request->input('body')
        ]);
        return redirect()->route('posts.index')->with('success',"Post created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $post = Post::find($id);
       return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);

        $post->update([
            'title' => $request->input('title'),
            'body'=>$request->input('body')
        ]);
        return redirect()->route('posts.index')->with('success',"Post Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success',"Post deleted successfully");
    }
}
