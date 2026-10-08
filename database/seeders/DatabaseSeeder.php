<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Publication;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Usuario de prueba 1
        $user1 = User::create([
            'name' => 'Diego',
            'email' => 'diego@example.com',
            'password' => Hash::make('123456'),
        ]);

        // Usuario de prueba 2
        $user2 = User::create([
            'name' => 'Ana',
            'email' => 'ana@example.com',
            'password' => Hash::make('123456'),
        ]);

        // Publicaciones del usuario 1
        Publication::create([
            'user_id' => $user1->id,
            'title' => 'Mi primera publicación',
            'content' => 'Este es mi primer pensamiento compartido en Thoughts.',
        ]);

        Publication::create([
            'user_id' => $user1->id,
            'title' => 'Una nueva idea',
            'content' => 'A veces una pequeña idea puede convertirse en un gran proyecto.',
        ]);

        // Publicaciones del usuario 2
        Publication::create([
            'user_id' => $user2->id,
            'title' => 'Pensamiento del día',
            'content' => 'Cada día es una nueva oportunidad para aprender algo.',
        ]);

        Publication::create([
            'user_id' => $user2->id,
            'title' => 'Notas personales',
            'content' => 'Escribir ayuda a ordenar nuestras ideas y pensamientos.',
        ]);
    }
}