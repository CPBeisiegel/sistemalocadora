<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Ator;

class atorController extends Controller
{
    public function listarAtores(Request $request){
        $atores = Ator::all();

        return response()->json($atores);

    }
}
