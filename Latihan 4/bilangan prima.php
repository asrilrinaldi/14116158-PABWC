<h2>Mencari Bilangan prima 1 - 37 !</h2>
<?php
for ($i=1; $i<=37; $i++){
    $prima = 0;
    for($j=1; $j<=$i; $j++){
        if($i % $j == 0){
            $prima++;
        }
    }
    if($prima == 2){
        echo "bilangan prima $i.";
        echo '<br>';
    }
}



?>