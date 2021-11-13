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
    $student = Student::find($id);
    $student->update($request->all());

    $response = [
      'message' => 'student is updated succesfully',
      'data' => $student
    ];

    return response()->json($response, 200);
  }

  // isfha style
  // function update(Request $request, $id){
  //   // menerima data request dari body
  //   $nama     = $request->nama;
  //   $nim      = $request->nim;
  //   $email    = $request->email;
  //   $jurusan  = $request->jurusan;

  //   // cari data student berdasarkan id
  //   $data = Student::find($id);

  //   if($data){
  //     $data->update([
  //       'nama'    => $nama,
  //       'nim'     => $nim,
  //       'email'   => $email,
  //       'jurusan' => $jurusan
  //     ]);

  //     return response()->json($data, 200);
  //   }
  //   else{
  //     $errorMessage = [
  //       'message' => 'data not found'
  //     ];
  //     return response()->json($errorMessage, 404);
  //   }
  // }

  function destroy($id){
    $stundent = Student::find($id);
    $stundent->delete();

    $response = [
      'message' => 'student is deleted succesfully'
    ];

    return response()->json($response, 200);
  }

  // isfha style
  // function destroy($id){
  //   $data = Student::find($id);

  //   if($data){
  //     $data-delete();

  //     $successMessage = [
  //       'message' => 'deleted succesfully'
  //     ];
  //     return response()->json($successMessage, 204);
  //   }
  //   else{
  //     $errorMessage = [
  //       'message' => 'data not found'
  //     ];
  //     return response()->json($errorMessage, 404);
  //   }
  // }

}
