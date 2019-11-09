<?php
setcookie("tes_cookie","test", time()+3600,'/');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
if (count($_COOKIE) >0){
    echo "Cookies enabled.";
}
else{
    echo "Cookies disabled.";
}
?>
<!-- mengapa cookies disabled pada browser samaran , karena browser sama tidak mendukung untuk menyimpan cookies 
maka itu browser samaran atau incognito biasa digunakan untuk para user yang ingin menggunakan di perangkat orang lain agar tidak terlihat history nya.
-->

    
</body>
</html>