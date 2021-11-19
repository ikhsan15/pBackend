<?php

namespace App\Http\Controllers;
# import model patiens untuk menggunakan elequent
use App\Models\Patiens;
use Illuminate\Http\Request;

class PatiensController extends Controller{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  # membuat function index untuk menampilkan data resource
  public function index(){
    # menggunakan model Patiens untuk select data menggunakan elequent all()
    $patiens = Patiens::all();

    # mengecek apakah data ada atau tidak
    if(count($patiens) == 0){
      $response = [
        'message' => 'Data is empty'
      ];
      return response()->json($response,200);
    #jika data ditemukan maka akan di jalankan
    }
    else{
      # membuat response pesan dan data berupa array
      $response = [
        'message' => 'Get All Resource',
        'data' => $patiens
      ];
      #mengirim data response dengan format json dan kode 200
      return response()->json($response,200);
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  # membuat function store untuk mengisi data
  public function store(Request $request){
    # membuat validasi
    $request->validate([
      'name' => 'required',
      'phone' => 'required',
      'address' => 'required',
      'status' => 'required',
    ]);

    # menggunakan model Patiens untuk mengisi sesuai input request menggunakan elequent create()
    $patiens = Patiens::create($request->all());

    # membuat response pesan dan data berupa array
    $response = [
      'message' => 'Resource is added successfully',
      'data' => $patiens
    ];

    #mengirim data response dengan format json dan kode 200
    return response()->json($response,201);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  # membuat function show untuk menampilkan data berdasarkan id yang diinput
  public function show($id){
    # menggunakan Patiens model dan elequent method find untuk mencari id
    $patiens = Patiens::find($id);

    # mengecek apakah data berdasarkan idnya ada atau tidak
    if ($patiens){
      # membuat response pesan dan data berupa array
      $response = [
        'message' => 'Get Detail Resource',
        'data' => $patiens
      ];

      #mengirim data response dengan format json dan kode 200
      return response()->json($response,200);
    }
    else{
      $response = [
        'message' => 'Resource not found'
      ];
      
      #response yang dikirimkan jika data berdasarkan id tidak ditemukan dengan kode 404
      return response()->json($response,404);
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  # membuat function update data berdasarkan inputan id dan requestnya
  public function update(Request $request, $id){
    # menggunakan Patiens model dan elequent method find untuk mencari id
    $patiens = Patiens::find($id);

    # mengecek apakah data berdasarkan idnya ada atau tidak
    if($patiens){
      #jika idnya ditemukan maka jalankan method update terhadap semua request
      $patiens->update($request->all());
      # membuat response pesan dan data berupa array
      $response = [
        'message' => 'Resource is update successfully',
        'data' => $patiens
      ];
      #mengirim data response dengan format json dan kode 200
      return response()->json($response,200);
    }
    else{
      $response = [
          'message' => 'Resource not found'
      ];
      #response yang dikirimkan jika data berdasarkan id tidak ditemukan dengan kode 404
      return response()->json($response,404);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  # membuat function destroy untuk menghapus data berdasarkan inputan idnya
  public function destroy($id){
    # menggunakan Patiens model dan elequent method find untuk mencari id
    $patiens = Patiens::find($id);

    # mengecek apakah data berdasarkan idnya ada atau tidak
    if($patiens){
      #jika idnya ditemukan maka jalankan method delete untuk mengapus data
      $patiens->delete($id);

      $response = [
        'message' => 'Resource is delete successfully'
      ];
      #response yang dikirimkan jika data berdasarkan id berhasil dihapus dengan kode 200
      return response()->json($response,200);
    }
    else{
      $response = [
        'message' => 'Resource not found'
      ];
      #response yang dikirimkan jika data berdasarkan id tidak ditemukan dengan kode 404
      return response()->json($response,404);
    }
  }

  /**
   * Search for a name
   *
   * @param  string  $name
   * @return \Illuminate\Http\Response
   */
  # membuat function search untuk mencari nama berdasarkan inputan name
  public function search($name){
    # menggunakan Patiens model dan method where untuk mencari data sesuai nama
    $patiens = Patiens::where('name', 'like', '%' . $name . '%')->get();

    # mengecek apakah data nama berdasarkan namanya ada atau tidak
    if ($patiens) {
      # membuat response pesan dan data nama berupa array
      $response = [
          'message' => 'Get searched resource',
          'data' => $patiens
      ];
      #response yang dikirimkan jika data berdasarkan nama berhasil ditemukan dengan kode 200
      return response()->json($response, 200);
    }
    else{
      $response = [
        'messsage' => 'Resource not found'
      ];

      #response yang dikirimkan jika data berdasarkan nama tidak ditemukan dengan kode 404
      return response()->json($response, 404);
    }
  }

  /**
   * Search for a name
   *
   * @param  string  $name
   * @return \Illuminate\Http\Response
   */
  # membuat function search status untuk mencari status berdasarkan inputan status
  public function searchstatus($status){
    # menggunakan Patiens model dan method where untuk mencari data sesuai status
    $patiens = Patiens::where('status', 'like', '%' . $status . '%')->get();

    # mengecek apakah data status berdasarkan statusnya ada atau tidak
    if ($patiens) {
      # membuat response pesan berdasarkan status dan data berupa array
      $response = [
        'message' => 'Get'.' '.$status.' '.'resource',
        'data' => $patiens
      ];
      #response yang dikirimkan jika data berdasarkan status berhasil ditemukan dengan kode 200
      return response()->json($response, 200);
    }
    else{
      $response = [
        'messsage' => 'Resource not found'
      ];
      #response yang dikirimkan jika data berdasarkan status tidak ditemukan dengan kode 404
      return response()->json($response, 404);
    }
  }
}
