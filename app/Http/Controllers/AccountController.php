<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function create() {
        return view('account.create');
    }

    public function store() {
        Account::create([
            'user' => request('user'),
            'password' => request('password'),
        ]);

        return redirect()->route('elTintero.index')
        ->with('success', 'Cuenta creada exitosamente');
    }
}
