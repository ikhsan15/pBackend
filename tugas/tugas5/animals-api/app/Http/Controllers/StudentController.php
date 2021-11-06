<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; //import model

class StudentController extends Controller{
  function index(){
    $data = Student::all();

    return response()->json($data, 200);
  }
  
  function create(Request $request){
    // menerima data request dari body
    $nama     = $request->nama;
    $nim      = $request->nim;
    $email    = $request->email;
    $jurusan  = $request->jurusan;
    
    // insert data ke db => students
    $student = Student::create([
      'nama'    => $nama,
      'nim'     => $nim,
      'email'   => $email,
      'jurusan' => $jurusan
    ]);

    $data = [
      'message' => 'student is created succesfully',
      'data'    => $student
    ];

    return response()->json($data, 201);
  }

  function update(Request $request, $id){

  }

  function destroy($id){

  }
}
