<table width="1170 align="center" border="0" cellpading="0" cellspacing="0">
      <tr height="60" border="0" bgcolor="#ECE8DE">
<td align="center" border="0" class="baslik">BANKA HESAPLARIMIZ</td>
      </tr>
      <tr height="55">
<td align="left" class="AltMetin">Ödemeleriniz İçin Çalışmakta Olduğumuz Tüm Banka Hesaplarımız Aşağıdadır.jjj </td>
      </tr>
      <tr height="5">
<td  style="border-bottom:1px solid yellow;"  ></td> 
      </tr>
      <tr>
<td> &nbsp;</td>
      </tr>
      <tr>
<td ><table width="1170" border="0" align="center" cellpading="0" cellspacing="0">

<tr><?php 
$BankalarSorgusu=$veritabanibaglantisi->prepare("SELECT * FROM bankahesaplarimiz");
$BankalarSorgusu->execute();
$BankaSayisi=$BankalarSorgusu->rowCount();
$BankaKayitlari=$BankalarSorgusu->fetchAll(PDO::FETCH_ASSOC);
$DonguSayisi=1;
$SutunAdetSayisi=3;
foreach ($BankaKayitlari as $Kayit) {
?>
    <td width="280">
         <table border="0" align="center" cellpading="0" cellspacing="0" style="border:1px solid white; margin-bottom:10px;" class="cerceve">
           
            <tr height="70">
                <td colspan="4" align="center"><img src="Resimler/<?php echo DonusumGeriDondur($Kayit["BankaLogo"]);?>" border="0"></td>
            </tr>
            <tr height="25">
                  <td width=15>&nbsp;</td>          
                  <td width="90"><b>Banka Adı</b></td>
                  <td width="20"><b>:</b></td>
                  <td width="160"><?php echo DonusumGeriDondur($Kayit["BankaAdi"]);?></td>            
            </tr>
            <tr height="25">
            <td>&nbsp;</td>          
                  <td><b>Konum</b></td>
                  <td><b>:</b></td>
                  <td><?php echo DonusumGeriDondur($Kayit["KonumSehir"]);?> / <?php echo DonusumGeriDondur($Kayit["KonumUlke"]);?></td>            
            </tr>
            <tr height="25">
            <td>&nbsp;</td>          

                  <td><b>Şube</b></td>
                  <td><b>:</b></td>
                  <td><?php echo DonusumGeriDondur( $Kayit["SubeAdi"]);?> / <?php echo DonusumGeriDondur( $Kayit["SubeKodu"]);?></td>            
            </tr>
            <tr height="25">
            <td>&nbsp;</td>          

                  <td><b>Birim</b></td>
                  <td><b>:</b></td>
                  <td><?php echo DonusumGeriDondur($Kayit["ParaBirimi"]);?></td>            
            </tr>
            <tr height="25">
                  <td>&nbsp;</td>          
                  <td><b>Hesap Adı</b></td>
                  <td><b>:</b></td>
                  <td><?php echo DonusumGeriDondur($Kayit["HesapSahibi"]);?></td>            
            </tr>
            <tr height="25">
          
                  <td>&nbsp;</td>          
                  <td><b>Hesap No</b></td>
                  <td><b>:</b></td>
                  <td><?php echo  DonusumGeriDondur( $Kayit["HesapNumarasi"]);?></td>            
            </tr>
            <tr height="25">
                  <td>&nbsp;</td>          
                  <td><b>IBAN</b></td>
                  <td><b>:</b></td>
                  <td><?php echo IBAN(DonusumGeriDondur($Kayit["IbanNumarasi"]));?> </td>  
            </tr>
         </table>        
    </td>   
<?php
      if($DonguSayisi<$SutunAdetSayisi){
?>
<td width="20">&nbsp;</td>
<?php
      }
?>
<?php
$DonguSayisi++;
if($DonguSayisi>$SutunAdetSayisi){
     echo  "</tr><tr>";
    $DonguSayisi=1;
}  
}
?>
</tr>
</table></td>
      </tr></table>
  