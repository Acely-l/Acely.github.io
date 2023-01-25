<?php
session_start();
ob_start();
require_once ('Ayarlar/ayar.php');
require_once ('Ayarlar/fonksiyonlar.php');
require_once ('Ayarlar/sitesayfa.php');

if (isset($_REQUEST['SK'])) {
    $SayfaKoduDegeri = SayiFiltre($_REQUEST['SK']);
} else {
    $SayfaKoduDegeri = 0;
}
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="UTF-8">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="revisit-after" content="7 Days">
<title><?php echo DonusumGeriDondur($SiteTitle); ?> </title>
<link type="image/png" rel="icon" width="200"  href="Resimler/Favicon.png">
<meta name="description" content="<?php echo DonusumGeriDondur( $SiteDescription); ?>">
<meta name="keywords" content="<?php echo $SiteKeywords; ?>">
<script type="text/javascript" src="Frameworks/JQuery/jquery-3.5.1.min.js" language="javascript"></script>
<link type="text/css" rel="stylesheet" href="Ayarlar/stil.css">
<script type="text/javascript" src="Ayarlar/fonksiyonlar.js" language="javascript"></script>
</head> 
<body>
    <table width="1200" height="100%"  align="center" border="0" cellpading="0">
        <tr height="80" >  
             <td align="center"> <img src="Resimler/KARGO.png" border="0"</td>
        </tr>
        <tr height="100">  
             <td>
                 <table  class="renk" width="1170" height="30" align="center" border="0" celpadding="0" cellspacing="0">
                     <tr>
                        <td>&nbsp;</td>
<?php

if(isset($_SESSION["EmailAdresi"])){
?>
                        <td width="20"><a href="xxxx"><img src="Resimler/user.png" border="0"> </a></td>
                        <td width="85" class="MaviAlanMenusu"><a href="index.php?SK=27" >Hesabım</a></td>
                        <td width="16"> <a href="xxxx"><img src="Resimler/cikis.png" border="0" style="marjin-top:15px" > </a></td>
                        <td width="100" class="MaviAlanMenusu"><a href="index.php?SK=29" >Çıkış</a></td>


<?php
}else{
?>
                        <td width="20"><a href="xxxx"><img src="Resimler/giris.png" border="0"> </a></td>
                        <td width="85" class="MaviAlanMenusu"><a href="index.php?SK=24" >Giriş Yap</a></td>
                        <td width="16"> <a href="xxxx"><img src="Resimler/yenikullanici.png" border="0" style="marjin-top:15px" > </a></td>
                        <td width="100" class="MaviAlanMenusu"><a href="index.php?SK=18" >Yeni Üye Ol</a></td>

<?php
}
?>

                        <td width="16"><a href="xxxx"><img src="Resimler/sepetekle.png" border="0" style="marjin-top:5px" ></a> </td>
                        <td width="130" class="MaviAlanMenusu"><a href="index.php?SK=33" >Alışveriş Sepeti</a> </td>
                     </tr>
                 </table>
                 <table width="1170" height="30" align="center" border="0" celpadding="0" cellspacing="0">
                     <tr class="renk2" width="1000">
                        <td width="186"> <a href="index.php?SK=0"><img src="Resimler/<?php echo DonusumGeriDondur($SiteLogosu); ?>" border="0"></a></td>
                        <td>
                        <table width="870"  height="30" align="center" border="0" celpadding="0" cellspacing="0">
                             <tr>
                                <td width="80">&nbsp;</td>
                                <td width="150" class="AnaMenu"><a href="index.php?SK=0">ANASAYFA</a></td>
                                <td width="200"  class="AnaMenu"><a href="index.php?SK=28">HEDİYE KARTLARI</a></td>
                                <td width="190"  class="AnaMenu"><a href="index.php?SK=30">KOKULU MUMLAR</a></td>
                                <td width="150"  class="AnaMenu"><a href="index.php?SK=31">TEKLİ MUM</a></td>
                                <td width="100"  class="AnaMenu"><a href="index.php?SK=32">TEALİGHT</a></td>
                           </tr>
                        </table>
                        </td
                     </tr>
                 </table></td>           
        </tr>
        <tr>  
             <td valign="top"><table width="1170" align="center" border="0" cellpading="0" cellspacing="0">
      <tr>
          <td align="center"><?php if(!$SayfaKoduDegeri or $SayfaKoduDegeri == '' or $SayfaKoduDegeri == 0 ) {
              include $Sayfa[0];
            } else {
              include $Sayfa[$SayfaKoduDegeri];
          } 
          ?></td>
      </tr>
       </table></td>
        </tr>
        <tr>
            <td>
                &nbsp;
            </td>
        </tr>
        <tr  height="210">  
             <td><table width="1170" class="footer"  align="center" border="0" celpadding="0" cellspacing="0">
                             <tr height="30">
                                 <td width="250" style="border-bottom:1px solid #000;"><b>&nbsp;Kurumsal</b></td>
                                 <td width="23">&nbsp;</td>
                                 <td width="250" style="border-bottom:1px solid #000;"><b>Üyelik ve Hizmetler</b></td>
                                 <td width="23">&nbsp;</td>
                                 <td width="250" style="border-bottom:1px solid #000;"><b>Sözleşmeler</b></td>
                                 <td width="24">&nbsp;</td>
                                 <td width="250" style="border-bottom:1px solid #000;"><b>Bizi Takip Edin</b></td>
                                 </tr>
                                 <tr height="30">
                                 <td class="AltMenu">&nbsp;<a href="index.php?SK=1">Hakkımızda</a></td>
                                 <td>&nbsp;</td>
                                 <td class="AltMenu"><a href="index.php?SK=24">Üye Girişi</a></td>
                                 <td>&nbsp;</td>
                                 <td class="AltMenu"><a href="index.php?SK=2">Üyelik Sözleşmesi</a></td>
                                 <td>&nbsp;</td>
                                 <td><table width="250" align="center" border="0" cellpading="0" cellspacing="0">
                                     <tr> 
                                            <td width="28"><a href="xxxx"><img src="Resimler/facebook.png"  border="0"></a></td>
                                            <td width="222" class="AltMenu"><a href="<?php echo DonusumGeriDondur($FacebookLink); ?>" target="_blank">Facebook</a></td>
                                     </tr>                                                                              
                                </table>
                                 </td>
                                 </tr>
                                 <tr height="30">
                                 <td class="AltMenu">&nbsp;<a href="index.php?SK=8">Banka Hesaplarımız</a></td>
                                 <td>&nbsp;</td>
                                 <td class="AltMenu"><a href="index.php?SK=18">Yeni Üye Ol</a></td>
                                 <td>&nbsp;</td>
                                 <td class="AltMenu"><a href="index.php?SK=3">Kullanım Koşulları</a></td>
                                 <td>&nbsp;</td>
                                 <td> <table width="" align="center" border="0" cellpading="0" cellspacing="0">
                                     <tr> 
                                            <td width="28" ><a href="xxxx"><img src="Resimler/twitter.png"></a> </td>
                                            <td width="222" class="AltMenu"><a href="<?php echo DonusumGeriDondur($TwitterLink);?>" target="_blank">Twitter</a></td>
                                     </tr>                                                                              
                                </table></td>
                                 </tr>
                                 <tr height="30">
                                 <td class="AltMenu">&nbsp;<a href="index.php?SK=9">Havale Bildirim Formu</a></td>
                                 <td>&nbsp;</td>
                                 <td class="AltMenu"><a href="index.php?SK=17">Sık Sorulan Sorular</a></td>
                                 <td>&nbsp;</td>
                                 <td class="AltMenu"><a href="index.php?SK=4">Gizlilik Sözleşmesi</a></td>
                                 <td>&nbsp;</td>
                                 <td><table width="" align="center" border="0" cellpading="0" cellspacing="0">
                                     <tr> 
                                            <td width="28"><a href="xxxx"><img src="Resimler/instagram.png"></a> </td>
                                            <td width="222" class="AltMenu"><a href="<?php echo DonusumGeriDondur($İnstagramLink);?>" target="_blank">İnstagram</a></td>
                                     </tr>                                                                              
                                </table></td>
                                 </tr>
                                 <tr height="30">
                                 <td class="AltMenu">&nbsp;<a href="index.php?SK=14">Kargom Nerede</a></td>
                                 <td>&nbsp;</td>
                                 <td></td>
                                 <td>&nbsp;</td>
                                 <td class="AltMenu"><a href="index.php?SK=5">Mesafeli Satış Sözleşmesi</a></td>
                                 <td>&nbsp;</td>
                                 <td><table width="" align="center" border="0" cellpading="0" cellspacing="0">
                                     <tr> 
                                            <td width="28"><img src="Resimler/youtube.png" style="marjin-top:5px"></a> </td>
                                            <td width="222" class="AltMenu"><a href="<?php echo DonusumGeriDondur($YoutubeLink);?>" target="_blank">Youtube</a></td>
                                     </tr>                                                                              
                                </table></td>
                                 </tr>
                                 <tr height="30">
                                 <td class="AltMenu">&nbsp;<a href="index.php?SK=16">İletişim</a></td>
                                 <td>&nbsp;</td>
                                 <td></td>
                                 <td >&nbsp;</td>
                                 <td class="AltMenu"><a href="index.php?SK=6">Teslimat</a></td>
                                 <td>&nbsp;</td>
                                 <td><table width="" align="center" border="0" cellpading="0" cellspacing="0">
                                     <tr> 
                                            <td width="28"><a href="xxxx"><img src="Resimler/link.png" ></a> </td>
                                            <td width="222" class="AltMenu"><a href="<?php echo DonusumGeriDondur($LinkedinLink);?>" target="_blank">LinkedIn</a></td>
                                     </tr>                                                                              
                                </table></td>
                                 </tr>
                                 <tr height="30">
                                 <td >&nbsp;</td>
                                 <td >&nbsp;</td>
                                 <td ></td>
                                 <td >&nbsp;</td>
                                 <td class="AltMenu"><a href="index.php?SK=7">İptal-İade-Değişim</a></td>
                                 <td>&nbsp;</td>
                                 <td ><table width="" align="center" border="0" cellpading="0" cellspacing="0">
                                     <tr> 
                                            <td width="28"><a href="xxxx"><img src="Resimler/pint.png"  border="0"> </a> </td>
                                            <td width="222" class="AltMenu"><a href="<?php echo DonusumGeriDondur($PinterestLink);?>" target="_blank">Pinterest</a></td>
                                     </tr>                                                                              
                                </table></td>
                                 </tr>
                        </td>
                  </tr>
                     </table>
                     <tr height="30">  
             <td><table width="1170"   align="center" border="0" celpadding="0" cellspacing="0">
                             <tr >
                                 <td align="center"><?php echo DonusumGeriDondur($SiteCopyrightMetni); ?></td>
                             </tr>
             </table> </td>
           </tr>
           <tr height="30">  
             <td><table width="1170"   align="center" border="0" celpadding="0" cellspacing="0">
                             <tr >
                                 <td align="center" height="5"> 
                                     <img src="Resimler/secure.svg"  border="0">
                                     
                                     </td>
                             </tr>
             </table> </td>
           </tr>
</body>
</html>
<?php $veritabanibaglantisi = null;
ob_end_flush();
?>
