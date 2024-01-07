<form action = "#" method = "POST">
    <input type="number" name="n1" placeholder ="birinchi raqamni kiriting" >
    <input type="number" name="n2"  placeholder ="ikkinchi raqamni kiriting" >
    <br>
    <label for="Qo'shish">Qo'shish</label>
    <input type="radio" value="qush" name ="radio" >
    <br>
    <label for="Qo'shish">Ayrish</label>
    <input type="radio" value="ayr" name ="radio" >
    <br>
    <label for="Qo'shish">Ko'paytirish</label>
    <input type="radio" value="kup" name ="radio" >
    <br>
    <label for="Qo'shish">Bo'lish</label>
    <input type="radio" value="bul" name ="radio">
    <br>
    <input type="submit" value="submit!">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number1  = $_POST['n1'];
    $number2  = $_POST['n2'];
    $radio  = $_POST['radio'];
    if(empty($number1) || empty($number2 )){
        echo "Ikkala maydon ham to'ldirilishi shart";
    }else{
            if ($radio == 'qush'){
                echo $number1+ $number2;
            }elseif($radio == 'ayr'){
                echo $number1-$number2;
            }elseif($radio == 'kup'){
                echo $number1*$number2;
            }elseif($radio == 'bul'){
                echo $number1/$number2;
            }
        }
    }
?>
