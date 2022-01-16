<?php !defined("guvenlik") ?die("buraya bu sekile gelemezsin"): null;


$database=$db_baglan->prepare("SELECT * FROM myblog");
$database->execute(array());




		echo"<br><br><br><br><br><br>";

        while($projem=$database->fetch(PDO::FETCH_ASSOC)){
			
			
			$blog_picture= $projem['resim'];
			$blog_text= $projem['haber'];
			$blog_date= $projem['tarih'];
			$blog_name= $projem['isim'];
			
		   
			$x1= "../"."admin"."/".$blog_picture;
			        echo "<table align='center' border='50px solid grey' style='width: 700px'>";
            echo "<tr>";
		    echo"<td style='color:black;' text-align: left;><img src='$x1' ></td>";
	echo"<td></td>";

    echo "</tr>";
  

			echo "</tr>";
			
		    echo "<tr>";
            echo"<td style='color:black;' text-align: left;><p>$blog_text</p></td>";
			echo "</tr>";
					
					
		    echo "<tr>";
            echo"<td style='color:black;' text-align: left;><p>$blog_name</p></td>";
			echo "</tr>";
		
		    echo "<tr>";
            echo"<td style='color:black;' text-align: left;><p>$blog_date</p></td>";
			echo "</tr>";
	    echo "</table>";
        echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';

        }

?>