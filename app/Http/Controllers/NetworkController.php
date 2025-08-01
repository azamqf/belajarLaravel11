<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index()
    {
        $networks = [
            (object)['id' => 1, 'name' => 'Jaringan A'],
            (object)['id' => 2, 'name' => 'Jaringan B'],
        ];

        return view('network.index', compact('networks'));
    }

    public function create() { return view('network.create'); }
    public function store(Request $request) {}
    public function show($id) {}
    public function edit($id) { return view('network.edit'); }
    public function update(Request $request, $id) {}
    public function destroy($id) {}
}
