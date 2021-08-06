<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main()
    {
        return view('layout/main');
    }

    public function about()
    {
        return view('about', ['nama' => 'Desrina Putri']);
    }


}
