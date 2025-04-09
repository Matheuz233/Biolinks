<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BioLinkController extends Controller
{
    public function __invoke($handler)
    {
        $user = User::whereHandler($handler)->firstOrFail();

        return view('bio-links', compact('user'));
    }
}
