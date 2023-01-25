<table width="1170" align="center" border="0" cellpading="0" cellspacing="0">
      <tr>
            <td width="500"><form action="index.php?SK=10" method="post" ><table width="500" align="center" border="0" cellpading="0" cellspacing="0" >
                <tr>
                    <td class="baslik" valign="top">HAVALE BİLDİRİM FORMU</td>
                </tr>
                <tr>
                    <td class="baslik2">Tamamlanmış Olan Ödeme İşleminizi Aşagıdaki Formdan İletiniz.. </td>
                </tr>
                <tr height="5">
<td  style="border-bottom:1px solid black;"  ></td> </tr>
<tr height="40"><td class="yazi" valign="bottom" align="left">İsim Soyisim(*)</td></tr>
<tr height="30"><td valign="top"><input type="text" class="inputhavale" name="AdSoyad"></td></tr>
<tr height="40"><td class="yazi" valign="bottom" align="left">E-mail(*)</td></tr>
<tr height="30"><td valign="top"><input type="mail" class="inputhavale" name="email"></td></tr>
<tr height="40"><td class="yazi" valign="bottom" align="left">Telefon Numarası(*)</td></tr>
<tr height="30"><td valign="top"><input type="text" class="inputhavale" name="telefon" maxlength="11"></td></tr>
<tr height="40"><td class="yazi" valign="bottom" align="left">Ödeme Yapılan Banka</td></tr>
<tr height="30"><td valign="top"><select name="bankasecim" class="selecthavale">

<?php
$BankalarSorgusu=$veritabanibaglantisi->prepare("SELECT * FROM bankahesaplarimiz ORDER BY BankaAdi ASC");
$BankalarSorgusu->execute();
$BankaSayisi=$BankalarSorgusu->rowCount();
$BankaKayitlari=$BankalarSorgusu->fetchAll(PDO::FETCH_ASSOC);
foreach($BankaKayitlari as  $Bankalar ){
?>
<option value="<?php echo $Bankalar["id"]?>"><?php echo $Bankalar["BankaAdi"];?></option>
<?php
}
?>
</select></td></tr>
<tr height="40"><td class="yazi" valign="bottom" align="left">Açıklama</td></tr>
<tr height="30"><td valign="top"><textarea  class="havaleAciklama" name="aciklama"></textarea></td></tr>
<tr height="40"><td ><input type="submit" class="button2" value="İLET"></td></tr>
            </table></form></td>
            <td  width="545" valign="top"><table width="545" align="center" border="0" cellpading="0" cellpading="0">
            <tr>
            <td width="10" colspan="2" style="color:purple" ><h3>İŞLEYİŞ</h3></td>
            </tr>
            <tr height="1" border=0>
            <td   colspan="2" width="540" ><b>Havale/EFT İşlemlerinin Kontrolü</b></td>
            </tr>

            <tr height="8.5"><td  width="540" colspan=2 style="border-bottom:1px solid #000;">
</tr>
        <tr height="30">
             <td align="left" width="30" > <img src="Resimler/pin.png" border="0" style="marjin-top:3px;"></td>
             <td align="left" valign="bottom"><b> Havale/EFT işlemi</b></td>
        </tr>
        <tr height="30"> 
        <td colspan="2"> &nbsp; Ödemenizi Denizbank, VakıfBank, QNB Finansbank, Akbank ,İşbankası ,Garanti Bankası veya Ziraat Bankası  hesabınızdan havale seçeneğini kullanarak yapabilirsiniz.</td>
        </tr>
        <tr><td colspan="2" style="border-bottom:1px dashed grey;" ></td></tr> 

        <tr height="30" >
             <td align="left" width="30"> <img src="Resimler/pin.png" border="0"   style="marjin-top:10px;"></td>
             <td align="left" valign="bottom"><b> Bildirim işlemi</b></td>
        </tr>
        <tr height="30"> 
        <td colspan="2"> &nbsp;Ödeme işleminizi tamamladıktan sonra Bildirim Formunu doldurup online olarak bize iletiniz.</td>
        </tr>     

        <tr><td colspan="2" style="border-bottom:1px dashed grey;" ></td></tr> 
       <tr height="30" >
       <td align="left" width="30"> <img src="Resimler/pin.png" border="0"   style="marjin-top:10px;"></td>
       <td align="left" valign="bottom"><b>Kontroller</b></td>
       </tr>
       <tr height="30"> 
       <td colspan="2"> &nbsp;Tarafımıza ilettiğiniz  bildirim formu ilgili departman tarafından incelenip, ödeme yaptığınız banka ile kontroller sağlanır.</td>
       </tr>
 
      <tr><td colspan="2" style="border-bottom:1px dashed grey;" ></td></tr> 
       <tr height="30" >
       <td align="left" width="30"> <img src="Resimler/pin.png" border="0"   style="marjin-top:10px;"></td>
       <td align="left" valign="bottom"><b>Onay/Red</b></td>
       </tr>
       <tr height="30"> 
       <td colspan="2"> &nbsp;Ödeme işleminiz hesaba aktarıldıysa yönetici tarafından onaylanır.Siparişiniz hazırlanır.</td>
       </tr>

       <tr><td colspan="2" style="border-bottom:1px dashed grey;" ></td></tr> 
       <tr height="30" >
       <td align="left" width="30"> <img src="Resimler/pin.png" border="0"   style="marjin-top:10px;"></td>
       <td align="left" valign="bottom"><b>Sipariş Hazırlama ve Teslimat</b></td>
       </tr>
       <tr height="30"> 
       <td colspan="2"> &nbsp;Ödeme onayından sonra siparişiniz hazırlanır,teslimat için ilgili kargoya verilir.</td>
       </tr>










            </table></td>
      </tr>
</table> 