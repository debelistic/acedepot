<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectorsController extends Controller
{
    //
    public function index()

    {
        $sectors = Sector::all();

        return view('sectors.index', compact('sectors'));
    }

    public function show($id)
    {
        $sector = Sector::find($id);

        return view('sectors.show', compact('sector'));
    }
}
