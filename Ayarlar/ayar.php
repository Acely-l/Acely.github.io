<?php
try{
    $veritabanibaglantisi=new PDO("mysql:host=127.0.0.1;dbname=candles;charset=UTF8", "root" , "");
}catch(PDOException $Hata){
//echo "bağlantı". $Hata->getMassage();
die();
}

$AyarlarSorgusu=$veritabanibaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
$AyarSayisi=$AyarlarSorgusu->rowCount();
$Ayarlar=$AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);

if($AyarSayisi>0){
    $SiteAdi = $Ayarlar["SiteAdi"];
    $SiteTitle=$Ayarlar["SiteTitle"];
    $SiteDescription=$Ayarlar["SiteDescription"];
    $SiteKeywords=$Ayarlar["SiteKeywords"];
    $SiteCopyrightMetni=$Ayarlar["SiteCopyrightMetni"];
    $SiteLogosu=$Ayarlar["SiteLogosu"];
    $SiteEmailAdresi=$Ayarlar["SiteEmailAdresi"];
    $SiteEmailSifresi=$Ayarlar["SiteEmailSifresi"];
    $SiteEmailHostAdresi=$Ayarlar["SiteEmailHostAdresi"];
    $FacebookLink=$Ayarlar["FacebookLink"];
    $TwitterLink=$Ayarlar["TwitterLink"];
    $İnstagramLink=$Ayarlar["İnstagramLink"];
    $YoutubeLink=$Ayarlar["YoutubeLink"];
    $LinkedinLink=$Ayarlar["LinkedinLink"];
    $PinterestLink=$Ayarlar["PinterestLink"];
}else{
    //echo "site ayar hatası";
    die();
}



















$MetinlerSorgusu=$veritabanibaglantisi->prepare("SELECT * FROM sözlesmelervemetinler LIMIT 1");
$MetinlerSorgusu->execute();
$MetinlerSayisi=$MetinlerSorgusu->rowCount();
$Metinler=$MetinlerSorgusu->fetch(PDO::FETCH_ASSOC);

if($AyarSayisi>0){
    $HakkimizdaMetni = $Metinler["HakkimizdaMetni"];
    $UyelikSözlesmesiMetni=$Metinler["UyelikSözlesmesiMetni"];
    $KullanımKoşullarıMetni=$Metinler["KullanımKoşullarıMetni"];
    $GizlilikSözleşmesiMetni=$Metinler["GizlilikSözleşmesiMetni"];
    $MesafeliSatisSözlesmesi=$Metinler["MesafeliSatisSözlesmesi"];
    $TeslimatMetni=$Metinler["TeslimatMetni"];
    $İptalİadeDegisim=$Metinler["İptalİadeDegisim"];

}else{
    //echo "metin hatası";
    die();
}
















if(isset($_SESSION["Kullanici"])){

    $KullaniciSorgusu=$veritabanibaglantisi->prepare("SELECT * FROM uye WHERE EmailAdresi=? LIMIT 1");
    $KullaniciSorgusu->execute([$_SESSION["Kullanici"]]);
    $KullaniciSayisi=$KullaniciSorgusu->rowCount();
    $Kullanici=$KullaniciSorgusu->fetch(PDO::FETCH_ASSOC);
    
    if($KullaniciSayisi>0){
        $KullaniciID=$Kullanici["id"];
        $EmailAdresi = $Kullanici["EmailAdresi"];
        $Sifre=$Kullanici["Sifre"];
        $IsimSoyisim=$Kullanici["IsimSoyisim"];
        $TelefonNumarasi=$Kullanici["TelefonNumarasi"];
        $Cinsiyet=$Kullanici["Cinsiyet"];
       
        $KayitTarihi=$Kullanici["KayitTarihi"];
        $KayitIpAdresi=$Kullanici["KayitIpAdresi"];
       
    
    }else{
       // echo "kullanıcı kayıt hatası";
        die();
    }
    
    }

    

$KullaniciSorgusu1=$veritabanibaglantisi->prepare("SELECT * FROM uye LIMIT 1");
$KullaniciSorgusu1->execute();
$KullaniciSayisi=$KullaniciSorgusu1->rowCount();
$Kullanici=$KullaniciSorgusu1->fetch(PDO::FETCH_ASSOC);

if($KullaniciSayisi>0){
    $KullaniciID=$Kullanici["id"];
    $EmailAdresi1 = $Kullanici["EmailAdresi"];
    $Sifre1=$Kullanici["Sifre"];
    $IsimSoyisim1=$Kullanici["IsimSoyisim"];
    $TelefonNumarasi1=$Kullanici["TelefonNumarasi"];
    $Cinsiyet1=$Kullanici["Cinsiyet"];
   
    $KayitTarihi1=$Kullanici["KayitTarihi"];
    $KayitIpAdresi1=$Kullanici["KayitIpAdresi"];
   

}else{
   // echo "kullanıcı kayıt hatası";
    die();
}














?>