<?php !defined("guvenlik") ?die("buraya bu sekile gelemezsin"): null;?>

	<!----start-contact---->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>Kontakte</h3>
			</div>
			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.9856345956805!2d7.125611315925706!3d51.53182331673777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8e6b8c9bb664b%3A0x931c833112ba9793!2sBickernstra%C3%9Fe%20171%2C%2045889%20Gelsenkirchen%2C%20Germany!5e0!3m2!1sen!2str!4v1640275181904!5m2!1sen!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				<div class="contact-text">
					<div class="col-md-4 contact-left">
						<h4>Danke, dass du meine Seite besucht hast. Ich hoffe dir hat mein Inhalt gefallen. </h4>
						<p>Du kannst mir auch gerne eine Nachricht hinterlassen, würde mich freuen deine Meinung zu hören.</p>
						<div class="address">
							<h4>Adresse</h4>
							<p>Bickernstr 171  
							<span>Münster</span>
							45889 Gelsenkirchen</p>
						</div>
					</div>	
					<div class="col-md-8 contact-right">
					<form action="" method="POST">
						<input placeholder="Name" type="text"  name="name" required>
						<input placeholder="Email" type="email" name="mail" required>
						<textarea placeholder="Nachricht" name="message" required></textarea>
							<div class="submit-btn">

									<input type="submit" value="Senden" name="submit">
								</form>
							</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!----end-contact---->

<?php

if(isset($_POST['submit']))
{

	if(isset($_POST['name']))
	{
	
		if(isset($_POST['mail']))
		{
			
			if(isset($_POST['message']))
			{

				$Name= $_POST["name"];
				$Mail= $_POST["mail"];
				$Message= $_POST["message"];
				
				$ekle="INSERT INTO mesaj(isim, mail,mesaj) 
						VALUES ('$Name','$Mail','$Message')";
				if ($db_baglan->query($ekle) == TRUE) 
				{
				?>
               	    <script>
                    alert("Nachricht wurde versendet");
					window.location.href='anasayfa';
                    </script>
                <?php
				}
				
			}
		}
	}
}

?>