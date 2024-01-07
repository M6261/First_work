<form action = "#" method = "POST">
    <input type="number" name="number"  >
    <input type="submit" value="submit!">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number  = $_POST['number'];
    if(empty($number)){
        echo "Kiritmadingizku";
    }else{
           switch($number){
                case 1:
                    echo "dushanba";
                    break;
                case 2:
                    echo "seshanba";
                    break;
                case 3:
                    echo "chor";
                    break; 
               case 4:
                    echo "pay";
                    break;  
                case 5:
                    echo "jum";
                     break;
                default:
                echo " Bunaqa hafta kuni yo'q";

           }

        }
    }
?>