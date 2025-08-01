<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GunController extends Controller
{
    public function index()
    {
        $guns = [
            ['id' => 1, 'name' => 'AK-47', 'type' => 'Assault Rifle'],
            ['id' => 2, 'name' => 'M4A1', 'type' => 'Rifle'],
            ['id' => 3, 'name' => 'Glock 18', 'type' => 'Pistol'],
        ];

        return view('guns.index', compact('guns'));
    }

    public function create()
    {
        return view('guns.create');
    }
}
