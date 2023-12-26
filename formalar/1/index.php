<form action = "#" method = "POST">
    <label for="phone">Uzb Phone </label>
    <input type="text" name="phone"  >
    <input type="submit" value="submit!">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $phone_number  = $_POST['phone'];
    if(empty($phone_number)){
        echo "Maydon bo'sh Telefon raqamni kiriting";
    }elseif($phone_number){
        $first_label = substr($phone_number,0,4);
        $last_label  = strlen(substr($phone_number,4));
        $is_int = is_int((int)$last_label);
        //  var_dump($last_label);
        if($first_label == "+998" && $last_label == 9 && $is_int == true ){
            echo  $phone_number;
        }else{
            echo "Bu telefon raqam emas yoki Uzb tel raqami emas hahaha.";
        }
    }
}
?>