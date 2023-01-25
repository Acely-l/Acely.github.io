<table width="1170 align="center" border="0" cellpading="0" cellspacing="0"><form action="index.php?SK=34" method="get">
      <tr height="60" border="0" >
<?php 
$vericek = $veritabanibaglantisi->query("SELECT * FROM urunler2 order by id desc limit 15", PDO::FETCH_ASSOC);
$DonguSayisi=1;
$SutunAdetSayisi=3;
foreach ($vericek as $row) {
?>
    <td width="200">
         <table border="0" align="center" cellpading="0" cellspacing="0"  >
           
            <tr height="170">
                <td  align="center" valign="center"><img src="urunler2/<?php echo DonusumGeriDondur($row["urunresmi"]);?>" border="0"></td>
            </tr>
            <tr height="25">            
                  <td width="20"  valign="CENTER" align="CENTER"><b><?php echo DonusumGeriDondur($row["urunadi"])."-->".DonusumGeriDondur($row["fiyat"])."TL";?></b></td>
                  
            </tr>
            <tr>
            <td  align="center" valign="center"><input type="submit" value="ekle" class="kargobtn"></td>
            </tr>
         </table>     
         </form>  
    </td>   
<?php
      if($DonguSayisi<$SutunAdetSayisi){
?>
<td width="15">&nbsp;</td>

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
  