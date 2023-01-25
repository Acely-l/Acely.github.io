<?php
if(isset($_POST["kargotakipno"])){
    $gelenkargono= SayiFiltre(guvenlik($_POST["kargotakipno"]));
}else{
    $gelenkargono="";
}

if($gelenkargono!=""){
    header("Location:https://www.yurticikargo.com/tr/online-servisler/gonderi-sorgula?code=".$gelenkargono);
    exit();
}else {
    header("Location:index.php?SK=14");
    exit();
}

?>