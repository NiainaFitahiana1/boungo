<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    public function show()
    {
        return view('formulaire.index');
    }
}
