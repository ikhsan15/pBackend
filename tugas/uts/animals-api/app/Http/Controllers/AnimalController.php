<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Animalcontroller extends Controller{
  public $animal = ['Kucing', 'Ayam', 'Ikan'];

  public function index(){
    foreach($this->animal as $this->index){
      echo "$this->index <br>";
    }
  }
  public function create(Request $request){
    array_push($this->animal, $request->nama);
    $this->index();
  }
  public function update(Request $request, $id){
    $this->animal[$id] = $request->nama;
    $this->index();
  }
  public function delete($id){
    unset($this->animal[$id], $id);
    $this->index();
  }

}