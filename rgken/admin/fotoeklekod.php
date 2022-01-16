<?php


if( isset($_POST['button']))
{
	$resim=$_FILES['input_resim']['name'];
	$icerik=$_POST['icerik'];
	$id= $_POST['id'];
	$dosya=$_FILES['input_resim']['tmp_name'];
	

$x1="proje"; 
$x2=$x1.$id."/".$resim; //gercek resim dosyasiin yolu 

	if(!$ekle="INSERT INTO projeresim(resimID,resim,yazi) VALUES ('$id','$x2','$icerik')"){ echo "Konnte nicht hochgeladen werden.";}
	else
	{
						$db_baglan->query($ekle);
                            if(move_uploaded_file($dosya,$x2))
							{
                                                        
                                    ?>
                                    <script>
                                    alert("Girmiş oldugunuz haberinizi ana sayfadan konrol edebilirsiniz");
                                    window.location.href='ProjeFoto';
                                    </script>
                                    <?php
                            }//close if move_upload
                            else
							{
                                echo "Konnte nicht hochgeladen werden.";
                            }//close else 
	
	}//close else
}//ilk iF isset olan









?>