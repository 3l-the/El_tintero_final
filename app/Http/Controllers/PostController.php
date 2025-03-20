<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use app\Models\Account;
use illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        $posts = DB::table('posts')
        ->join('accounts', 'posts.account_id', '=', 'accounts.id')
        ->select('posts.title', 'posts.content', 'users.name')
        ->get();
        return view('elTintero.index', compact('posts'));
    }

    public function create($sessionUserId) {
        $account = Account::table('accounts')
        ->select('accounts.user')
        ->where('accounts.id', '=', $sessionUserId);
        return view('posts.create')->with('accounts', $account);
    }

    public function store(Request $request) {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'account_id' => $request->user_id,
        ]); 
        return redirect()->route('elTintero.index')
        ->with('success', 'Publicación creada exitosamente');
    }
}
