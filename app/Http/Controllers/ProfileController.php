<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'user' => auth()->user(),
        ]);
    }

    public function update(ProfileRequest $request)
    {
        /** @var User */
        $user = auth()->user();

        $user->fill($request->validated())->save();

        return back()
            ->with('success', 'Perfil atualizado com sucesso!');
    }
}
