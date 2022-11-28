<?php

namespace App\Http\Controllers;

use App\Models\Debito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
//
    public function index()
    {
        $data = Debito::all();
        return view('home', ['data'=>$data]);
    }
}