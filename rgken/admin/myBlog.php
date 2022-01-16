

<div class="container">
        <h2>Project Fotos hochladen</h2>
        <form action="myBlog" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                 <label for="pwd">Lade ein Foto hoch:</label>
                 <input type="file" class="form-control" id="pwd" placeholder="Foto Hochladen" name="foto">
            </div>
            <div class="form-group" height="250px" width="30">
                 <label for="email">Dein Post:</label>
                 <input type="text" class="form-control" id="email" placeholder="Text" name="post" width="30">
             </div>
			 
			<div class="form-group">
                  <label>Name:</label>
				  <br>
                <input type="text"  name="name" placeholder="Dein Name" >
            </div>
			
                <button type="submit" class="btn btn-primary"  name="button">OK</button>
        </form>
</div>

<?php

if( isset($_POST['button']))
{
	$resim=$_FILES['foto']['name'];
	$text=$_POST['post'];
	$name= $_POST['name'];
	$dosya=$_FILES['foto']['tmp_name'];
	

$x1="Blog"; 
$x2=$x1."/".$resim; //gercek resim dosyasiin yolu 

	if(!$ekle="INSERT INTO myblog(resim, haber, isim) VALUES ('$x2','$text','$name')"){ echo "Konnte niht gepostet werden.";}
	else
	{
						$db_baglan->query($ekle);
                            if(move_uploaded_file($dosya,$x2))
							{
                                                        
                                    ?>
                                    <script>
                                    alert("Du kannst dein Post auf deiner web Seite sehen.");
                                    window.location.href='MyBlog';
                                    </script>
                                    <?php
                            }//close if move_upload
                            else
							{
                                echo "Konnte nicht gepostet werden.";
                            }//close else 
	
	}//close else
}//ilk iF isset olan




?>