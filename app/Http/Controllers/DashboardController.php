<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Mostrar el dashboard del usuario.
     */
    public function index()
    {
        $user = Auth::user();

        $publicationsCount = $user->publications()->count();

        $recentPublications = $user->publications()
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'user',
            'publicationsCount',
            'recentPublications'
        ));
    }
}
