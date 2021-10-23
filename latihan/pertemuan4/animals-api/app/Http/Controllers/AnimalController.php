<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller{
  function index(){
    echo "ini adalah daftar animals";
  }
  function create(){
    echo "add new daftar animals";
  }
  function update($id){
    echo "update daftar animals dari id $id";
  }
  function destroy($id){
    echo "delete daftar animals dari id $id";
  }
}
