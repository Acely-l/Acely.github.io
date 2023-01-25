<form action="index.php?SK=15" method="post">
<table width="1170" align="center"   border="0" cellpading="0" cellspacing="0">
      <tr height="60" border="0" bgcolor="#ECE8DE"  >
<td align="center" border="0"colspan="6" class="baslik">SIK SORULAN SORULAR</td>
      </tr>
      <tr height="55" colspan="6">
<td align="left" class="AltMetin" colspan="6">Merak ettiğiniz soruların cevaplarına buradan ulaşabilirsiniz.</td>
      </tr>
      <tr height="5">
<td  style="border-bottom:1px solid #6e194a;"  colspan="6"></td> 
      </tr> 
      
      

      <tr>
         <td><?php

            $SoruSorgusu=$veritabanibaglantisi->prepare("SELECT * FROM sorular");
            $SoruSorgusu->execute();
            $SoruSayisi=$SoruSorgusu->rowCount();
            $SoruKayitlari=$SoruSorgusu->fetchAll(PDO::FETCH_ASSOC);
            
            foreach( $SoruKayitlari as $Kayitlar){
            ?>
            <div>
                  <div id="<?php echo $Kayitlar["id"]; ?>" class="Soru" onclick="$.SoruGöster(<?php echo $Kayitlar ["id"]; ?>)"><?php echo $Kayitlar["soru"]; ?></div>
                  <div style="display:none;" class="CevapAlanı"><?php echo $Kayitlar ["cevap"]; ?></div>
            </div>
         <?php
            }
         ?>
          </td>
      </tr>
      </table></form>