<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');

        $characters = [
            [
                'name' => 'Agatha Heiz',
                'type' => 'Human',
                'role' => 'Protagonist',
                'project' => 'Standalone'
            ],
            [
                'name' => 'Alastair Ceilo',
                'type' => 'Human',
                'role' => 'Supporting',
                'project' => 'Standalone'
            ],
            [
                'name' => 'Atlas',
                'type' => 'Human',
                'role' => 'Supporting',
                'project' => 'Standalone'
            ],
        ];

        $totalCharacters = count($characters);

        $projectNames = array_column($characters, 'project');
        $totalProjects = count(array_unique($projectNames));

        return view('dashboard', compact(
            'username',
            'characters',
            'totalCharacters',
            'totalProjects'
        ));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');

        $characters = [
            [
                'id' => '001',
                'name' => 'Agatha Heiz',
                'type' => 'Human',
                'species' => 'Human',
                'project' => 'Standalone',
                'role' => 'Protagonist',
                'status' => 'Active'
            ],
            [
                'id' => '002',
                'name' => 'Alastair Ceilo',
                'type' => 'Human',
                'species' => 'Human',
                'project' => 'Standalone',
                'role' => 'Supporting',
                'status' => 'Active'
            ],
            [
                'id' => '003',
                'name' => 'Atlas',
                'type' => 'Human',
                'species' => 'Human',
                'project' => 'Standalone',
                'role' => 'Supporting',
                'status' => 'Active'
            ],
        ];

        return view('pengelolaan', compact('username', 'characters'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');

        return view('profile', compact('username'));
    }
}
