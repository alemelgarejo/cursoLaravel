<?php

namespace App\Http\Controllers\api;



use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::join('post_images', 'post_images.post_id', '=', 'posts.id')
        ->join('categories', 'categories.id', '=', 'posts.category_id')
        ->select('posts.*', 'categories.title as category', 'post_images.image')
        ->orderBy('posts.created_at', 'desc')
        ->paginate(10);
        return $this->successResponse($posts);
        //return response()->json($posts, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show(Post $post)
    {
        $post->image;
        $post->category;
        return $this->successResponse($post);
        //return response()->json(['data' => $post, 'code' => 500, 'msj' => ''], 500);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
