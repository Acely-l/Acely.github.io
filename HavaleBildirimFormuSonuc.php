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

if(isset($_POST["telefon"])){
    $GelenTelefon=guvenlik($_POST["telefon"]);
}else{
    $GelenTelefon="";
}

if(isset($_POST["bankasecim"])){
    $GelenBankaSecim=guvenlik($_POST["bankasecim"]);
}else{
    $GelenBankaSecim="";
}

if(isset($_POST["aciklama"])){
    $GelenAciklama=guvenlik($_POST["aciklama"]);
}else{
    $GelenAciklama="";
}

if(($GelenAdSoyad!="")and($GelenEmail!="")and($GelenTelefon!="")and($GelenBankaSecim!="")){
   

$HavaleBildirimleriKayit=$veritabanibaglantisi->prepare("INSERT INTO  havalebildirimleri(BankaId,AdiSoyadi,EmailAdresi,TelefonNumarasi,Aciklama,İslemTarihi,Durum) values(?,?,?,?,?,?,?)");
$HavaleBildirimleriKayit->execute([$GelenBankaSecim,$GelenAdSoyad,$GelenEmail,$GelenTelefon,$GelenAciklama,$ZamanDamgasi,0]);
$Kontrol=$HavaleBildirimleriKayit->rowCount();
if($Kontrol>0){
    header("Location:index.php?SK=11");
    exit();
}else{
    header("Location:index.php?SK=12");
    exit();
}
    
    

}else{
    header("Location:index.php?SK=13");
    exit();

}



?>



