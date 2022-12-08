<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class kamarcontroller extends Controller
{
    public function index() {
        return view('kamar.all', ['data_kamar' => Kamar::all() ]);
    }
}
