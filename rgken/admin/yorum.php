<?php
    $bul=$db_baglan->query("SELECT * FROM yorum");
    echo '<table border="20" width="900px" align="center"> ';
	echo '<tr>
			<th> Name </th>
			<th>  </th>
			<th> Projekt ID </th>
			<th> Kommentar </th>
			<th>  Datum </th>
			<th>Kommentar  </th>
			<th>Kommentar erlauben </th>
			<th>Kommentar Löschen  </th>
		  </tr>';
    while($show=$bul->fetch(PDO::FETCH_ASSOC)){
		$key=$show['id'];
        $isim=$show["isim"];
		$id=$show["baslikID"];
        $mesaj=$show["mesaj"];
        $onay=$show["onay"];
		$time=$show['time'];
		
        echo '<tr>';
        echo "<td> $isim <td>";
        echo "<td> $id </td>";
        echo "<td> $mesaj </td>";
		echo "<td> $time </td>";
		echo "<td> $onay </td>";
		
        echo "<td> <a href='yorum_onay?git=$key' > erlauben</a> </td>" ;
        echo "<td> <a href='yorum_sil?git=$key' >Löschen</a> </td>" ;
        echo '</tr>';
    }
    echo '</table>';
	
?>

