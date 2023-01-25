<?php

if(isset($_POST["mail"])){
    $GelenEmail=guvenlik($_POST["mail"]);
}else{
    $GelenEmail="";
}


if(isset($_POST["sifre"])){
    $GelenSifre=guvenlik($_POST["sifre"]);
}else{
    $GelenSifre="";
}
$MD5sifre=md5($GelenSifre);
if(($GelenEmail!="")and($GelenSifre!="")){
        $KontrolSorgusu=$veritabanibaglantisi->prepare("SELECT FROM uye WHERE EmailAdresi=? AND Sifre=?");
        $KontrolSorgusu->execute([$GelenEmail,$MD5sifre]);
        $KullaniciSayisi=$KontrolSorgusu->rowCount();
        $kullaniciKaydi=$KontrolSorgusu->fetch(PDO::FETCH_ASSOC);
       
        if($_SESSION["EmailAdresi"]=$GelenEmail){
            
                                header("Location:index.php?SK=27");//giriş
                                exit();
                            }else {
                            
                                header("Location:index.php?SK=26");//eşleşme yok
                                exit();
                                 }
                        

   

    
}else {
    header("Location:index.php?SK=21");//eksik alan
    exit();
}





?>