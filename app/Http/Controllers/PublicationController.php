<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    /**
     * Mostrar todas las publicaciones.
     */
    public function index()
    {
        $publications = Publication::with('user')
            ->latest()
            ->paginate(10);

        return view('publications.index', compact('publications'));
    }

    /**
     * Mostrar formulario para crear publicación.
     */
    public function create()
    {
        return view('publications.create');
    }

    /**
     * Guardar una nueva publicación.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:5000'],
        ]);

        Publication::create([
            'user_id' => Auth::id(),
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);

        return redirect()
            ->route('publications.mine')
            ->with('success', 'Publicación creada correctamente.');
    }

    /**
     * Mostrar las publicaciones del usuario actual.
     */
    public function mine()
    {
        $publications = Publication::where('user_id', Auth::id())
            ->latest()
            ->paginate(10);

        return view('publications.mine', compact('publications'));
    }
}
