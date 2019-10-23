<?php
 function bet($color="red", $nama='Asril rinaldi'){
    
   
    $jumlah_nama = strlen($nama);
   //  echo "Jumlah Nama : ".$jumlah_nama ."<br>";


    if ($jumlah_nama <= 10){
      echo 'Nama : <font color="'.$color.'">'.$nama.'</font><br>';
      echo 'Jumlah : <font color="'.$color.'">'.$jumlah_nama.'</font><br>';
      $harga_total = $jumlah_nama * 300;
      echo 'Total harga : <font color="'.$color.'">'.$harga_total.'</font><br>';
      echo "<br>";

   }else if($jumlah_nama >10 && $jumlah_nama <=20 ){
      echo 'Nama : <font color="'.$color.'">'.$nama.'</font><br>';
      echo 'Jumlah : <font color="'.$color.'">'.$jumlah_nama.'</font><br>';
      $harga_total = $jumlah_nama * 500;
      echo 'Total harga : <font color="'.$color.'">'.$harga_total.'</font><br>';
      echo "<br>";
  

   }else if($jumlah_nama >20 ){
      echo 'Nama : <font color="'.$color.'">'.$nama.'</font><br>';
      echo 'Jumlah : <font color="'.$color.'">'.$jumlah_nama.'</font><br>';
      $harga_total = $jumlah_nama * 700;
      echo 'Total harga : <font color="'.$color.'">'.$harga_total.'</font><br>';
      echo "<br>";   
     
  
   }
    

 }

bet(); 

?>