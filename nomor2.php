<?php 
    if(isset($_POST['proses'])){
        $angka = $_POST['angka'];

        function Konversi($angka){
            $hsl = "";
            if($angka<1||$angka>3999){
                $hsl = "Batas Angka 1 s/d 3999";
            }else{
                while($angka>=1000){
                    $hsl .= "M";
                    $angka -= 1000;
                }
                if($angka>=500){
                    if($angka>500){
                        if($angka>=900){
                            $hsl .= "M";
                            $angka-=900;
                        }else{
                            $hsl .= "D";
                            $angka-=500;
                        }
                    }
                }
                while($angka>=100){
                    if($angka>=400){
                        $hsl .= "CD";
                        $angka-=400;
                    }else{
                        $angka-=100;
                    }
                }
                if($angka>=50){
                    if($angka>=90){
                        $hsl .= "XC";
                        $angka-=90;
                    }else{
                        $hsl .= "L";
                        $angka-=50;
                    }
                }
                while($angka>=10){
                    if($angka>=40){
                        $hsl .= "XL";
                        $angka-=40;
                    }else{
                        $hsl .= "X";
                        $angka-=10;
                    }
                }
                if($angka>=5){
                    if($angka==9){
                        $hsl .= "IX";
                        $angka-=9;
                    }else{
                        $hsl .= "V";
                        $angka-=5;
                    }
                }
                while($angka>=1){
                    if($angka==4){
                        $hsl .= "IV";
                        $angka-=4;
                    }else{
                        $hsl .= "I";
                        $angka-=1;
                    }
                }
            }
            return ($hsl);
        }
    
    }
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">
    <input type="text" name="angka" placeholder="Masukkan Angka" >
    <input type="submit" name="proses" value="Proses" class="btn btn-primary">
    <h1>Angka Romawi:</h1>
    <?php
    echo " romawinya adalah sebgai berikut : ".Konversi($angka) ; 
    ?>
</form>

</body>
</html>