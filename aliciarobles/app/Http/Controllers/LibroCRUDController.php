<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LibroCRUDController extends Controller
{
    public function mostrarFormularioAdd(){
        return view('addLibro');
    }


}
