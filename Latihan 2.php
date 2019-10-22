<?php
 function bar($color="black"){
    echo 'Nama : <font color="'.$color.'">'.$nama.'</font><br>';

 }

 $nama = 'Asril rinaldi rinaldi';
 $jumlah_nama = strlen($nama);

 

 if ($jumlah_nama <= 10){
    echo 'Nama : <font color=blue>'.$nama.'</font><br>';
    echo "Jumlah Nama : ".$jumlah_nama ."<br>";
    $harga_total = $jumlah_nama * 300;
    echo "Harga Total Rp." .$harga_total ."<br>";
    

 }else if($jumlah_nama >10 && $jumlah_nama <=20 ){
    echo 'Nama : <font color=red>'.$nama.'</font><br>';
    echo "Jumlah Nama : ".$jumlah_nama ."<br>";
    $harga_total = $jumlah_nama * 500;
    echo "Harga Total Rp." .$harga_total ."<br>";
    

 }else if($jumlah_nama >20 ){
    echo 'Nama : <font color=green>'.$nama.'</font><br>';
    echo "Jumlah Nama : ".$jumlah_nama ."<br>";
    $harga_total = $jumlah_nama * 700;
    echo "Harga Total Rp." .$harga_total ."<br>";
   

 }
 
 
 
//  bar();
//  bar('red');
//  bar('blue');
//  bar('green');

?>