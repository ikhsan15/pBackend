<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller{
  function index(){
    // echo "ini adalah daftar animals";
    // return json_encode([
    //   "name"  => "fish",
    //   "color" => "black",
    // ]);
  }
  function create(Request $request){
    echo "add new daftar animals";
  }
  function update(Request $request, $id){
    $name = $request->nama;
    $color = $request->warna;
    echo "update daftar animals dari id ".$id."<br>";
    echo "nama terbaru adalah $name";
    echo "<br>";
    echo "dengan warna $color";
  }
  function destroy($id){
    echo "delete daftar animals dari id $id";
  }
}
