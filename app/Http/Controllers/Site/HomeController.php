<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Curso;

class HomeController extends Controller
{
    public function index()
    {
        //$cursos = Curso::where('publicado', '=', 'sim')->paginate(3);
        $cursos = Curso::all();
        return view('home', compact('cursos'));
    }
}
