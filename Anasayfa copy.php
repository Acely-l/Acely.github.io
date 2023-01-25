<?php


$vericek = $veritabanibaglantisi->query("SELECT * FROM urunler order by id desc limit 15", PDO::FETCH_ASSOC);
$DonguSayisi=1;
$SutunAdetSayisi=3;


        
        





?>

<table border=1 width="1170" height="1000"><tr>
<tr valign="top" width="300" height="100" border="1">
<td><?php foreach($vericek as $row){
echo $row["urunadi"]."----------". DonusumGeriDondur($row["urunresmi"])."jpg"."</a><br>";
        ?>
<img src="urunler/<?php echo $row["urunresmi"];?> ">    



</td>
<?php
}
?>
</tr>








</tr></table>








*****************








<?php


$vericek = $veritabanibaglantisi->query("SELECT * FROM urunler order by id desc limit 15", PDO::FETCH_ASSOC);
$DonguSayisi=1;
$SutunAdetSayisi=3;


        
        





?>

<table border=1 width="1170" height="1000"><tr>

<td><?php foreach($vericek as $row){
        ?>
         <td width="280">
             <table border="0" align="center" cellpading="0" cellspacing="0"  >
         <tr height="70">
            <td  align="center"><img src="urunler/<?php echo DonusumGeriDondur($row["urunresmi"]);?>" border="0"></td>
         </tr>
         <tr height="25">
                <td width="160"><?php echo DonusumGeriDondur($row["urunadi"]);?></td>
                <td width="160"><?php echo DonusumGeriDondur($row["fiyat"]);?></td>        
                
         </tr>


</td>






</td>

<?php
}
?>
</tr>








</tr></table>