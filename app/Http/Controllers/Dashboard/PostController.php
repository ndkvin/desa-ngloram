<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.dashboard.post.index', [
            'posts' => Post::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.post.create');
    }

    function createUniqueSlug($input)
    {
        $slug = Str::slug($input);
        $uniqueSlug = $slug;
        $counter = 1;

        while (Post::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter;
            $counter++;
        }

        return $uniqueSlug;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'image' => ['required', 'image', 'max:2048'],
            'category' => ['required', 'string', 'in:berita,agenda,pengumuman'],
        ]);

        $image = $request->file('image');

        $fileName = $image->store('posts', 'public');

        Post::create([
            'title' => $request->title,
            'slug' => $this->createUniqueSlug($request->title),
            'content' => $request->content,
            'image' => $fileName,
            'category' => $request->category,
        ]);

        return redirect()->route('dashboard.post.index')->with('success', 'Post created successfully');
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
    public function edit(Post $post)
    {
        return view('pages.dashboard.post.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'image' => ['image', 'max:2048'],
            'category' => ['required', 'string', 'in:berita,agenda,pengumuman'],
        ]);

        $slug = $post->slug;
        // check if title change
        if ($request->title != $post->title) {
            $slug = $this->createUniqueSlug($request->title);
        }

        $fileName = $post->image;
        if ($request->hasFile('image')) {
            Storage::delete('public/' . $post->image);

            $image = $request->file('image');
            $fileName = $image->store('posts', 'public');
        } 

        $post->update([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $request->hasFile('image') ? $fileName : $post->image,
            'category' => $request->category,
        ]);

        return redirect()->route('dashboard.post.index')->with('success', "Postingan $post->title berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Storage::delete('public/' . $post->image);

        $post->delete();

        return redirect()->route('dashboard.post.index')->with('success',  "Postingan $post->title berhasil dihapus");
    }
}
