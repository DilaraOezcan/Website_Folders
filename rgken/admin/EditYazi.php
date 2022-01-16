<?php
include 'database.php';
$number=$_GET['git'];
$bul=$db_baglan->query("SELECT * FROM projeresim WHERE id='$number'");
$show=$bul->fetch(PDO::FETCH_ASSOC);

$yazi=$show['yazi'];

echo"
<form action='FotoYaziGüncelleme.php?git=$number' method='POST'>
<br><br><br><br><br><br><br><br><br><br><br><br>
<table align='center' border='30' width='600px'>


        <td style='color:grey;'><h1 align='center'>Beschriftung</h1></td>
		<td style='color:grey;'><textarea cols='85' rows='10' value=' 'name='icerik' required> $yazi  </textarea><br></td>
    </tr>
<tr><td COLSPAN='2' align='center'>
<button type='submit' value='$number' name='button'> Ändern</button></td></tr>  
</table>   
</form>
";
?>

<?php


if(isset($_POST['button'])){
	
$number=$_POST['button'];
$yazi=$_POST['yazi'];
$guncelle=$db_baglan->query("UPDATE projeresim set yazi='$yazi' 
                                        WHERE id=$number");
										
    ?>

    <script>
    window.location.href='ProjeFoto';
    </script>
    <?php
}
?>