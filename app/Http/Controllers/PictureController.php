<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('picture.create', [
            'title' => 'Create Picture'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required|url',
            'description' => 'required',
        ]);

        $post = new Picture();
        $post->name = $request->name;
        $post->url = $request->url;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('blog')->with('success', 'Post created successfully!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Picture $picture)
    {
        // if ($post->user_id !== auth()->id()) {
        //     return redirect()->route('dashboard')->with('error', 'You are not authorized to edit this post.');
        // }
        $title = 'Edit Picture';
        return view('picture.edit',  compact('picture', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Picture $picture)
    {
        // Ensure the authenticated user is authorized to update the post
        // if ($post->user_id !== auth()->id()) {
        //     return redirect()->route('dashboard')->with('error', 'You are not authorized to update this post.');
        // }

        // Validate the request data
        $request->validate([
            'name' => 'required',
            'url' => 'required|url',
            'description' => 'required',
        ]);

        // Update the post with the new data
        $picture->update([
            'name' => $request->name,
            'url' => $request->url,
            'description' => $request->description,
        ]);

        return redirect()->route('blog')->with('success', 'Post updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Picture $picture)
    {
        $picture->delete();

        return redirect()->route('blog')->with('success', 'Post deleted successfully!');
    
    }
}
