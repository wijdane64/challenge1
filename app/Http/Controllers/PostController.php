<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::all();
        return response()->json($posts);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
try {
$validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'nullable|string',
            'author' => 'nullable|string',
        ]);
        $post = Post::create($validated);

        return response()->json([
            'message' => 'Post créé avec succès 🎉',
            'data' => $post
        ], 201);  

} catch (Exception $e) {
return response()->json([

'error' => $e->getMessage()
]);
}
      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post non trouvé'], 404);
        }
        return response()->json($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post non trouvé'], 404);
        }
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post non trouvé'], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'status' => 'sometimes|nullable|string',
            'author' => 'sometimes|nullable|string',
        ]);

        $post->update($validated);

        return response()->json([
            'message' => 'Post mis à jour avec succès 🎉',
            'data' => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post non trouvé'], 404);
        }

        $post->delete();

        return response()->json(['message' => 'Post supprimé avec succès 🗑️']) ;
    }
}
