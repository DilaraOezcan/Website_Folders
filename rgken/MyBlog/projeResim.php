<?php

$number=$_GET["proje"];
$database=$db_baglan->prepare("SELECT * FROM projeresim WHERE resimID=:deger");
$database->execute(array(':deger'=>$number));

$database_detay=$db_baglan->prepare("SELECT * FROM projedetay WHERE id=:deger");
$database_detay->execute(array(':deger'=>$number));
$detay=$database_detay->fetch(PDO::FETCH_ASSOC);
$baslik=$detay['Baslik'];

		echo"<br><br><br><br><br><br>";

        while($projem=$database->fetch(PDO::FETCH_ASSOC)){
			
			        echo "<table align='center' border='50px solid grey' style='width: 700px'>";
            echo "<tr>";
			        echo"<td style='color:grey;'><h3 align='center'>$baslik</h3></td>";
	echo"<td></td>";

    echo "</tr>";
	
	
				    
            $showpicture=$projem['resim'];
			$x1= "../"."admin"."/".$showpicture;
            $showtext=$projem['yazi'];
			echo "<tr>";
		    echo"<td style='color:black;' text-align: left;><img src='$x1' ></td>";
  

			echo "</tr>";
			
		    echo "<tr>";
            echo"<td style='color:black;' text-align: left;><p>$showtext</p></td>";
			echo "</tr>";
					
	    echo "</table>";
        echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';

        }
		


        
?>

