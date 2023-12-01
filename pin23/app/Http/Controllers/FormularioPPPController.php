<?php

namespace App\Http\Controllers;

use Database\Seeders\FormularioPPPSeeder;
use Illuminate\Http\Request;

class FormularioPPPController extends Controller
{

    public function guardarFormulario(Request $requesta){
        return  view('formularioppp');

    }
}
