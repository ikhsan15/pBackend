<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; //import model

class StudentController extends Controller{
  function index(){
    $students = Student::all();
    if(count($students) == 0){
      $response = [
          'message' => 'Data not found'
      ];
      return response()->json($response,404);
    }
    else{
      $response = [
        'message' => "Get All Student",
        'data' => $students
      ];
      return response()->json($response,200);
    }
  }

  public function create(Request $request){
    $student = Student::create($request->all());
    $response = [
      'message' => 'Student is created succsesfully',
      'data' => $student
    ];
    return response()->json($response,201);
  }

  public function update(Request $request,$id){
    $student = Student::find($id);
    if ($student){
      $student->update($request->all());
      $response = [
        'message' => 'Student updated',
        'data' => $student
      ];
      return response()->json($response,200);
    }
    else{
      $response=[
        'message' => "Data not found"
      ];
      return response()->json($response,404);
    }
  }

  public function destroy($id){
    $stundent = Student::find($id);
    if ($stundent){
      $stundent->delete();
      $response = [
        'message' => 'Student deleted'
      ];
      return response()->json($response,200);
    }
    else{
      $response = [
        'message' => "Data not found"
      ];
      return response()->json($response,404);
    }
  }

}
