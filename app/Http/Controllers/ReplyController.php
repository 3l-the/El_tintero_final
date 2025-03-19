<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;
use app\Models\Account;
use app\Models\Post;
use illuminate\Support\Facades\DB;

class ReplyController extends Controller
{
    public function index($postId) {
        $replies = DB::table('replies')
        ->join('content', 'replies.post_id', '=', 'post.id')
        ->join('accounts', 'replies.account_id', '=', 'accounts.id')
        ->select('replies.content', 'accounts.user')
        ->where('replies.post_id', '=', $postId)
        ->get();
        return view('posts.details', compact('replies'));
    }

    public function create($postId, $sessionUserId) {
        $post = Post::table('posts')
        ->select('posts.id')
        ->where('posts.id', '=', $postId);

        $account = Account::table('accounts')
        ->select('accounts.id')
        ->where('accounts.id', '=', $sessionUserId);

        return view('posts.details')->with('posts', $post)->with('accounts', $account);
    }

    public function store(Request $request) {
        Reply::create([
            'content' => $request->content,
            'user_id' => $request->account_id,
            'post_id' => $request->post_id,
        ]); 
        return redirect()->route('posts.details')
        ->with('success', 'Respuesta añadida exitosamente');
    }
}
