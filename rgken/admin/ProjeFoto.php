<h2> Meine Projekt Fotos</h2>
<br>
<form action="ProjeFoto" method="POST">
<table >

<tr> <td> <button name="choose" value="1" style="background-color:tomato;color:white;width:100%;"> <h4> Project ID:1 </h4></td></button></tr>

<tr> <td> <button name="choose" value="2" style="background-color:tomato;color:white;width:100%;"> <h4> Project ID:2 </h4></td></button></tr>

<tr> <td> <button name="choose" value="3" style="background-color:tomato;color:white;width:100%;"> <h4> Project ID:3 </h4></td></button></tr>

<tr> <td> <button name="choose" value="4" style="background-color:tomato;color:white;width:100%;"> <h4> Project ID:4 </h4></td></button></tr>

<tr> <td> <button name="choose" value="5" style="background-color:tomato;color:white;width:100%;"> <h4> Project ID:5 </h4></td></button></tr>

<tr> <td> <button name="choose" value="6" style="background-color:tomato;color:white;width:100%;"> <h4> Project ID:6 </h4></td></button></tr>

</table>
</form>




<?php

if(isset($_POST['choose']))
{

$number=$_POST["choose"];

$database=$db_baglan->prepare("SELECT * FROM projeresim WHERE resimID=:deger");
$database->execute(array(':deger'=>$number));

				    


		echo"<table align='center' >";
		echo"<tr><td><a href='fotoekle?proje=$number' ><button name='add' value=$number style='background-color:tomato;color:white;width:100%;'> Foto Hinzufügen </button></a></td></tr>";
		echo"</table>";
		echo"<br><br><br>";
        while($projem=$database->fetch(PDO::FETCH_ASSOC)){
			$ID= $projem['id'];
			$Resim= $projem['resim'];
			$Yazi= $projem['yazi'];

    echo "<table align='center' border='1' width='400px'>";

    echo "<tr>";
        echo"<td COLSPAN='2' align='center'><img src='$Resim' width='600px' height='400px'></td>";
    echo "</tr>";
    echo "<tr>";
    echo"<td COLSPAN='2' style='color:black;' text-align: left;><p>$Yazi</p></td>";
    echo "</tr>";
 
    echo "<tr>";
    echo"<td style='color:black;' text-align: left;><a href='SilFoto?git=$ID'><p style='color:red'> Löschen</p></a></td>";
	    echo"<td style='color:black;' text-align: left;><a href='EditYazi?git=$ID'><p style='color:red'>Ändern</p></a></td>";
    echo "</tr>";

echo "</table>";
        echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';

        }
		


}//IF CLOSED      
?>

