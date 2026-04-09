<?php

namespace App\Http\Controllers;

use App\Models\Artist;

class ArtistController extends Controller
{
    public function index()
    {
        return Artist::all();
    }

    public function show($id)
    {
        return Artist::find($id);
    }
}
