<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Reply;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }
    public function save()
    {
        $user = auth()->user();
        $this->validate(request(), [
            'post_subject' => 'required',
            'post_message' => 'required'
        ]);
        $post = Post::create([
            'post_subject' => request()->input('post_subject'),
            'post_content' => request()->input('post_message'),
            'post_by' => $user->id,
        ]);
        return redirect()->to('post/index')
            ->with('success','Se creo la publicación exitosamente.');
    }
    public function index()
    {
        $posts = Post::orderBy('post_id', 'DESC')->get();
        $arrPosts = array();
        foreach ($posts as $post) {
            $user = User::where('id', $post->post_by)->first();
            $arrPosts[] = array(
                'post_id' => $post->post_id,
                'post_subject' => $post->post_subject,
                'user_id' => $user->id,
                'user_name' => $user->name,
                'post_date' => $post->created_at
            );
        }
        return view('post.index', ['posts' => $arrPosts]);
    }
    public function detail($id)
    {
        $post = Post::where('post_id', $id)->first();
        $replies = Reply::where('reply_post', $id)->get();
        $postUser = User::where('id', $post->post_by)->first();

        $arrReplies = array();
        foreach ($replies as $reply) {
            $user = User::where('id', $reply->reply_by)->first();
            $arrReplies[] = array(
                'reply_by' => $user->name,
                'user_id' => $user->id,
                'reply_content' => $reply->reply_content,
                'reply_date' => $reply->created_at
            );
        }
        return view('post.detail', ['post' => $post, 'replies' => $arrReplies, 'user' => $postUser]);
    }
    public function replySave()
    {
        $user = auth()->user();
        $this->validate(request(), [
            'reply_message' => 'required'
        ]);
        $reply = Reply::create([
            'reply_content' => request()->input('reply_message'),
            'reply_post' => request()->input('post_id'),
            'reply_by' => $user->id
        ]);
        return redirect()->to('post/detail/'.request()->input('post_id'))
            ->with('success','Respuesta añadida exitosamente.');
    }
    public function userposts($id)
    {
        $user = User::where('id', $id)->first();
        $posts = Post::where('post_by', $id)->orderBy('post_id', 'DESC')->get();
        $arrPosts = array();
        foreach ($posts as $post) {
            $arrPosts[] = array(
                'post_id' => $post->post_id,
                'post_subject' => $post->post_subject,
                'post_date' => $post->created_at
            );
        }
        return view('post.user', ['posts' => $arrPosts, 'user' => $user]);
    }
}
