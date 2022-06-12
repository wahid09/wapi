<?php

namespace App\Http\Controllers\Admin\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Exception;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        try{
            $posts = Post::latest()->get();
            return sendSuccess('Successfully show Post list', $posts, 200);
        }catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }

    public function store(PostRequest $request)
    {
        try{
            $post = Post::create($request->all());
            return sendSuccess('Post added successfully', $post, 200);
        }catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
        
    }

    public function show($id)
    {
        try{
            $post = Post::findOrFail($id);
            return sendSuccess('Successfully show Post', $post, 200);
        }catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
        
    }

    public function update(PostRequest $request, $id)
    {
        try{
            $post = Post::findOrFail($id);
            $post->update($request->all());

            return sendSuccess('Post updated successfully', $post, 200);
        }catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
        
    }

    public function destroy($id)
    {
        try{
            Post::destroy($id);
            return sendSuccess('Post deleted successfully', '', 204);
        }catch (Exception $e) {
            return sendError($e->getMessage(), '', $e->getCode());
        }
    }
}