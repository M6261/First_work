<form action = "#" method = "POST">
    <h1>1-Taom</h1>
    <input type="radio" value="mastava" name ="t1" >
    <label for="Qo'shish">Mastava(16.000)</label>
    <input type="radio" value="moxora" name ="t1" >
    <label for="Qo'shish">Moxora(15.500)</label>
    <input type="radio" value="shurva" name ="t1" >
    <label for="Qo'shish">Sho'rva (15.000)</label>
    <input type="radio" value="norin" name ="t1">
    <label for="Qo'shish">Norin(20.500)</label>
    <br>
    <h1>2-Taom</h1>
    <input type="radio" value="osh" name ="t2" >
    <label for="Qo'shish">Osh(20.000)</label>
    <input type="radio" value="manti" name ="t2" >
    <label for="Qo'shish">Manti(18.500)</label>
    <input type="radio" value="kabob" name ="t2" >
    <label for="Qo'shish">Qozon Kabob (23.000)</label>
    <input type="radio" value="lagmon" name ="t2">
    <label for="Qo'shish">Lag'mon(21.500)</label>
    <br>
    <h1>15% usluga</h1>
    <input type="submit" value="Hisoblash">
</form>

<?php

$sum = [
    'mastava'=>16000,
    'moxora'=>15500,
    'shurva'=>15000,
    'norin'=>20500,
    'osh'=>20000,
    'manti'=>18500,
    'kabob'=>23000,
    'lagmon'=>21500,
];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $t1  = $_POST['t1'];
    $t2  = $_POST['t2'];
    $chekSumma = 0;
    $jamiSumma = 0;
        if(isset($t1)){
            $chekSumma += $sum[$t1];
        }
        if(isset($t2)){
            $chekSumma += $sum[$t2];
        }
        $jamiSumma =  $chekSumma +  $chekSumma*0.15;
        echo "Jami: ".$jamiSumma;
    }
?>