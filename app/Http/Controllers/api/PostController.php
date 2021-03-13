<?php

namespace App\Http\Controllers\api;



use App\Http\Controllers\Controller;
use App\Models\Category;
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

    public function show(Post $post)
    {
        $post->image;
        $post->category;
        return $this->successResponse($post);
        //return response()->json(['data' => $post, 'code' => 500, 'msj' => ''], 500);
    }

    public function category(Category $category)
    {
        return $this->successResponse(['post' => $category->post()->paginate(10), "category" => $category]);
        //return response()->json(['data' => $post, 'code' => 500, 'msj' => ''], 500);
    }

}
