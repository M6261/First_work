<form action = "#" method = "POST">
    <input type="number" name="n1" placeholder ="birinchi raqamni kiriting" >
    <input type="number" name="n2"  placeholder ="ikkinchi raqamni kiriting" >
    <input type="submit" value="submit!">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number1  = $_POST['n1'];
    $number2  = $_POST['n2'];
    if(empty($number1) || empty($number2 )){
        echo "Ikkala maydon ham to'ldirilishi shart";
    }else{
            echo $number1+$number2;
        }
    }
?>
