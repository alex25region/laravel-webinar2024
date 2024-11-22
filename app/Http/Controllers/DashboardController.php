<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $countUsers = User::query()->count();
        return view('dashboard', compact('countUsers'));
    }
}
