<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(MakeLoginRequest $request) // MakeLoginRequest -> Chama a classe de validação
    {
        if ($request->attempt()) {
            return redirect()->route('dashboard');
        }

        return back()->with(['message' => 'Não foi possivel realizar o login']);
    }
}
