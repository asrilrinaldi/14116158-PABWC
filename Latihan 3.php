<!DOCTYPE html>
<html>
    <head>
        <title>Latihan 3</title>
    </head>
    <body>
        <form name="frm01" method="post">
            <table>
                <tr>
                    <td>Masukkan Angka</td>
                    <td><input type="text" name="angka" size="5"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="hasil" value="Hasil"/></td>
                </tr>
            </table>
                <?php
                error_reporting(0);
                if($_POST['hasil']!=''){
                    $faktor=$_POST['angka'];
                        function faktorial($faktor){
                            if($faktor<=1){
                                $hasil=1;
                                return $hasil; 
                            }elseif($faktor>1){
                                for($i=1; $i<=$faktor; $i++){
                                    $hasil=$faktor * faktorial($faktor-1);
                                }
                            return $hasil;
                            }
                }
                echo "Angka :".$faktor."<br>";
                echo "Faktorial dari "." ".$faktor." "."adalah :"." ".faktorial($faktor);
                }
                ?>
        </form>
    </body>
</html>