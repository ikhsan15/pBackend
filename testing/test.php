<?php
  // Definisikan variable array
  // index array secara default dimulai dari 0
  $ar_buah = array("Jeruk","Manggis","Mangga","Pisang","Jambu");

  // tambahkan buah baru diakhir 
  $ar_buah[]="Durian";
  
  // dapatkan jumlah elemen array
  $jumlah_buah = count( $ar_buah );
  echo '<br/>Jumlah Buah : '.$jumlah_buah;

  // ganti buah index ke 3
  $ar_buah[3]="Pepaya";
  
  // hapus buah index ke 1
  unset( $ar_buah[1]);

  //tampilkan daftar buah dengan indexnya
  foreach ($ar_buah as $k => $v ){
    echo '<br/>Buah index ke '.$k.' adalah  '.$v;
  } 
?>

