<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /**
         * @var User $user
         */

        $user = auth()->user();

        return view('dashboard', [
            'links' => $user->links,
        ]);
    }
}
