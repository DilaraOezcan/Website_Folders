<?php !defined("guvenlik") ?die("buraya bu sekile gelemezsin"): null;

if(isset($_POST['button']))
{

	if(isset($_POST['user_names']))
	{
	
		if(isset($_POST['projectID']))
		{

				if(isset($_POST['mesaj']))
				{

					$Name= $_POST["user_names"];
					$ID=$_POST['projectID'];
					$Mesaj= $_POST["mesaj"];
				
					$ekle="INSERT INTO yorum(isim,baslikID, mesaj) 
						VALUES ('$Name','$ID','$Mesaj')";
						
					if ($db_baglan->query($ekle) == TRUE) 
					{
						?>
						<script>
						alert("Kommentar wurde versendet");
						window.location.href='gallery';
						</script>
						<?php
						echo $hidden;
					}
				
				}
		}
		
	}
}

?>

<div class="container">
<br><br><br>
        <h4>Lass mir gerne ein Kommentar da</h4>
		<h6>Schribe als Projekt ID: 1,2,3,4,5 oder 6, für welches Projekt du kommentieren willst</h6>
		<br>
        <form action="ProjeYorumlari" method="POST" enctype="multipart/form-data">
             <div class="form-group">
                 <label for="email">Name:</label>
                 <input type="text" class="form-control" id="email" placeholder="Dein Name" name="user_names">
				 
		     <div class="form-group">
                 <label for="email">Projekt ID:</label>
                 <input type="text" class="form-control" id="email" placeholder="Für welches Project ID?" name="projectID">
             </div>

            <div class="form-group">
                 <label for="pwd">Dein Kommentar:</label>
                 <textarea cols="77" rows="6" value=" "name="mesaj" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}" required>Dein Kommentar</textarea>
				 
				 

				 
				 
            </div>
			
			

                <button type="submit" class="btn btn-primary" name="button">Senden</button>
        </form>
</div>






<?php

$number=$_GET["proje"];
$database=$db_baglan->prepare("SELECT * FROM yorum WHERE baslikID=:deger AND onay=1 ORDER BY time DESC");
$database->execute(array(':deger'=>$number));



    echo "<table align='center' border='20px solid blue' width='400px'>";
        echo "<tr align='center'>";
           echo"<br><br><br><th style='color:black;'><h1>Kommentare</h1></th>";  
        echo "</tr>";
	
    echo "</table>";   

echo"<br><br><br>";
		
while($show=$database->fetch(PDO::FETCH_ASSOC)){
    $name=$show["isim"];

	$yorum=$show["mesaj"];
	$id=$show['id'];
	$date=$show['time'];
    echo "<table align='center' border='0' width='600px'>";


    echo"<tr>";
    echo"<td style='color:black;'>$yorum </td>";
    echo "</tr>";

    echo"<tr>";
    echo"<td width='600px' style='color:pink;'><h5 align='left'>$name, $date</h5></td>";    
	
    echo "</tr>";


echo"<tr>";
echo"<td><br><br></td>";
echo"<td></td>";
echo"</tr>";


	
	
echo "</table>";

}
?>





