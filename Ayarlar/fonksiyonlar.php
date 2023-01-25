<?php
$IPAdresi = $_SERVER["REMOTE_ADDR"];
$ZamanDamgasi = time();
$TarihSaat=date("d.m.Y H:i:s",$ZamanDamgasi);
function tarih($Deger){
$cevir=date("d.m.Y H:i:s",$Deger);
$Sonuc=$cevir;
return $Sonuc;

}


function Rakamlarharicsil($Deger){
    $Islem=preg_replace("/[^0-9]/","",$Deger);
    $Sonuc=$Islem;
    return $Sonuc;
}
function DonusumGeriDondur($Deger){
    $GeriDondur=htmlspecialchars_decode($Deger,ENT_QUOTES);
    $Sonuc=$GeriDondur;
    return $Sonuc;
}
function guvenlik($Deger){
    $BoslukSil=trim($Deger);
    $TagTemizle=strip_tags($BoslukSil);
    $EtkisizYap=htmlspecialchars($TagTemizle,ENT_QUOTES);
    $Sonuc=$EtkisizYap;
    return $Sonuc;
}
function SayiFiltre($Deger){
    $BoslukSil=trim($Deger);
    $TagTemizle=strip_tags($BoslukSil);
    $EtkisizYap=htmlspecialchars($TagTemizle,ENT_QUOTES);
    $Temizle=Rakamlarharicsil($EtkisizYap);
    $Sonuc=$Temizle;
    return $Sonuc;
}
function TumBosluklariSil($Deger){
    $Islem=preg_replace("/\s|&nbsp;/","",$Deger);
    $Sonuc=$Islem;
    return $Sonuc;
}
function IBAN($Deger){
    $BoslukSil=trim($Deger);
    $TümBoslukSil=TumBosluklariSil($Deger);
    $Blok1=substr($TümBoslukSil,0,4);
    $Blok2=substr($TümBoslukSil,4,4);
    $Blok3=substr($TümBoslukSil,8,4);
    $Blok4=substr($TümBoslukSil,12,4);
    $Blok5=substr($TümBoslukSil,16,4);
    $Blok6=substr($TümBoslukSil,20,4);
    $Blok7=substr($TümBoslukSil,24,2);
   $Duzenle=$Blok1." ".$Blok2." ".$Blok3." ".$Blok4." ".$Blok5." ".$Blok6." ".$Blok7;
   $Sonuc =$Duzenle;
   return $Sonuc;
}



?>