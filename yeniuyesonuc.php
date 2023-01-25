<?php
if(isset($_POST["AdSoyad"])){
    $GelenAdSoyad=guvenlik($_POST["AdSoyad"]);
}else{
    $GelenAdSoyad="";
}

if(isset($_POST["email"])){
    $GelenEmail=guvenlik($_POST["email"]);
}else{
    $GelenEmail="";
}


if(isset($_POST["sifre"])){
    $GelenSifre=guvenlik($_POST["sifre"]);
}else{
    $GelenSifre="";
}





if(isset($_POST["telefon"])){
    $GelenTelefon=guvenlik($_POST["telefon"]);
}else{
    $GelenTelefon="";
}



if(isset($_POST["cinsiyet"])){
    $Gelencinsiyet=guvenlik($_POST["cinsiyet"]);        
}else{
    $Gelencinsiyet="";
}

if(isset($_POST["sozlesmeonay"])){
    $Gelenonay=guvenlik($_POST["sozlesmeonay"]);
}else{
    $Gelenonay="";
}



////////bunu kaldırmayı denee
if($Gelenonay==0){
    header("Location:index.php?SK=23");
    exit();
}else{

////

$MD5sifre=md5($GelenSifre);
if(($GelenEmail!="")and($GelenSifre!="")and($GelenAdSoyad!="")and($GelenTelefon!="")and($Gelenonay!="")and ($Gelencinsiyet!="")){
    
    
    $UyeEklemeSorgusu=$veritabanibaglantisi->prepare("INSERT INTO uye(EmailAdresi, Sifre, IsimSoyisim, TelefonNumarasi, Cinsiyet, KayitTarihi, KayitIpAdresi) values(?,?,?,?,?,?,?)");
    $UyeEklemeSorgusu->execute([$GelenEmail,$MD5sifre,$GelenAdSoyad,$GelenTelefon,$Gelencinsiyet,$ZamanDamgasi,$IPAdresi]);
    $Kontrol=$UyeEklemeSorgusu->rowCount();
                        if($Kontrol>0){
                            header("Location:index.php?SK=20");//tamam
                            exit(); 
                        }else{
                            header("Location:index.php?SK=22");//tekrarlı kullanıcı
                            exit();
                        }

                    
}else{
    header("Location:index.php?SK=21");//eksik alan
    exit();
}
}
?>

   