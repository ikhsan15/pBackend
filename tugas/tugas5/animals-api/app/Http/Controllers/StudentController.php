<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  function index(){
    $response = [
      "nama" => "ikhsan nur",
      "kota" => "pku"
    ];
    return response()->json($response, 200);
  }
}
