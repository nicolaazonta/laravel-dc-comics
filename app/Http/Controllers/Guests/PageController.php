<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function comics()
    {
        $comics = Comic::all();
        return view('comics', compact('comics'));
    }
}
