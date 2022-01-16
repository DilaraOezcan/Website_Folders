<?php

$number=$_GET['proje'];


?>

<div class="container">
        <h2>Project Fotos hochladen</h2>
        <form action="fotoeklekod" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                 <label for="pwd">Lade ein Foto hoch:</label>
                 <input type="file" class="form-control" id="pwd" placeholder="Foto Hochladen" name="input_resim">
            </div>
            <div class="form-group" height="250px" width="30">
                 <label for="email">Bild Beschreibung:</label>
                 <input type="text" class="form-control" id="email" placeholder="Beschreibung" name="icerik" width="30">
             </div>
			 
			<div class="form-group">
                  <label>Scheibe bitte die jeweilige Project ID:</label>
				  <br>
                <input type="text"  name="id" placeholder="Welches Project ID?" >
            </div>
			
                <button type="submit" class="btn btn-primary"  name="button">OK</button>
        </form>
</div>

<?php


?>