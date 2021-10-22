<!-- plz read file readme.md first before u check my file, thx sir -->

<?php

# membuat class Animal
class Animal{
  # property animals
  public $animals = [];

  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct($data){
    $this->animals = $data;
  }

  # method index - menampilkan data animals
  public function index(){
    # gunakan foreach untuk menampilkan data animals (array)
    foreach ($this->animals as $animal){
      print_r($animal);
      echo "<br>";
  }
  }
  public function store($data){
    # gunakan method array_push untuk menambahkan data baru
    return array_push($this->animals, $data);
  }

  public function update($index, $data){
    return $this->animals[$index] = $data;
  }

  # method delete - menghapus hewan
  # parameter: index
  public function destroy($index){
    # gunakan method unset atau array_splice untuk menghapus data array
    return array_splice($this->animals, $index, 1);
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

