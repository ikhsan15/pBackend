<?php

# membuat class Animal
class Animal{
  # property animals
  public $animal;

  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct($data){
    $this->animal = $data;
  }

  # method index - menampilkan data animals
  public function index(){
    # gunakan foreach untuk menampilkan data animals (array)
    $animal = array('ayam', 'ikan', 'kucing');
    foreach($animal as $res){
      echo "$res <br>";
    }
  }
  public function store($data){
    # gunakan method array_push untuk menambahkan data baru
    $animal = array('ayam', 'ikan', 'kucing');
    array_push($animal, $data);
    print_r($animal);
    echo "<br>";
  }

  public function update($index, $data){
    $animal = array('ayam', 'ikan', 'kucing');
    array_replace($animal, $data);
    print_r($animal);
    echo "<br>";
  }

  # method delete - menghapus hewan
  # parameter: index
  public function destroy($index){
    # gunakan method unset atau array_splice untuk menghapus data array
    $animal = array('ayam', 'ikan', 'kucing');
    // array_splice($animal, 0, 1);
    unset ($animal[1]);
    print_r($animal);
    echo "<br>";
  }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(['ayam', 'ikan', 'kucing']);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";