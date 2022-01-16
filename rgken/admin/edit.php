<?php
include 'database.php';
$number=$_GET['git'];
$bul=$db_baglan->query("SELECT * FROM projedetay WHERE id='$number'");
$show=$bul->fetch(PDO::FETCH_ASSOC);

$ProjeID=$show['projeID'];
$Baslik=$show['Baslik'];
$icerik=$show['icerik'];

echo"
<form action='yenile.php?git=$number' method='POST'>
<br><br><br><br><br><br><br><br><br><br><br><br>
<table align='center' border='30' width='600px'>
   <tr>

        <td style='color:grey;'><h1 align='center'>Projekt</h1></td>
		<td style='color:grey;'><textarea cols='77' rows='2' value=' 'name='projeID' required> $ProjeID</textarea><br></td>
    </tr>
	
	   <tr>

        <td style='color:grey;'><h1 align='center'>Überschrift</h1></td>
		<td style='color:grey;'><textarea cols='77' rows='2' value=' 'name='baslik' required>$Baslik </textarea><br></td>
    </tr>
	
		   <tr>

        <td style='color:grey;'><h1 align='center'>Inhalt</h1></td>
		<td style='color:grey;'><textarea cols='85' rows='10' value=' 'name='icerik' required> $icerik  </textarea><br></td>
    </tr>
<tr><td COLSPAN='2' align='center'>
<input type='submit' value='OK' name='button'> </td></tr>  
</table>   
</form>
";
?>

