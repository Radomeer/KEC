
<?php 
	$hasError = false;
	$sent = false;

	if(isset($_POST['submitForm'])) {
		$name = trim(htmlspecialchars($_POST['name'], ENT_QUOTES));
		$email = trim($_POST['email']);
		$message = trim(htmlspecialchars($_POST['message'], ENT_QUOTES));


		$fieldsArray = array('name' => $name, 'email'=>$email, 'message' => $message);

		$errorArray = array();

		foreach ($fieldsArray as $key => $val) {
			switch ($key) {
				case 'name':
				case 'message':
					if(empty($val)) {
						$hassError = true;
						$$errorArray[$key] = ucfirst($key) . "field was left empty.";
					}
					break;
				case 'email':
					if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$hasError = true;
						$errorArray[$key] = "Invalid Email Address entered"; 
					}else {
						$email = filter_var($email, FILTER_SANITIZE_EMAIL);
					}
					break;
			}	
		}

		if($hasError !== true) {
			$to = "digitalbrain2002@yahoo.com";
			$subjects = "Message from Kultural-Educational Centar TARA";
			$msgContents="Name: $name<br>Email: $email<br>Message: $message";
			$headers = "MIME-Version: 1.0 \r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
			$headers .= "From: $name <$email> \r\n";
			$mailSent = mail($to, $subjects, $msgContents, $headers);

			if($mailSent) {
				$sent = true;
				unset($name);
				unset($email);
				unset($message);
			} 
		} 	
	}
	/*	ini_set("SMTP","ssl://smtp.gmail.com"); 
		ini_set("smtp_port","465"); //No further need to edit your configuration files.
		$mail = new PHPMailer();
		$mail->SMTPAuth = true;
		$mail->Host = "smtp.gmail.com"; // SMTP server
		$mail->SMTPSecure = "ssl";
		$mail->Username = "Raja"; //account with which you want to send mail. Or use this account. i dont care :-P
		$mail->Password = "blalbla"; //this account's password.
		$mail->Port = "465";
		$mail->IsSMTP();  // telling the class to use SMTP
		$rec1="radomirrankovic@gmail.com"; //receiver. email addresses to which u want to send the mail.
		$mail->AddAddress($rec1);
		$mail->Subject  = "Message from Kultural-Educational Centar TARA";
		$mail->Body     = $message;
		$mail->WordWrap = 200;
		if(!$mail->Send()) {
				$sent = true;
				unset($name);
				unset($email);
				unset($message);
		} 
	}
*/

		

?>




<?php include("commponents/header.php");?>


		<?php include("commponents/navigation.php") ?> 



		<div class = "row">	
			<article class "mainContent">
				<div class="col col-md-8">
					 <div class = "contact-form">
					 	<h1>Kontakt Forma</h1>
					 	<form id = "contactForm" method="post" action="contact_form.php" novalidate> 
							<?php 
								if($sent === true) {
									echo "<h2 class ='success'> Thanks, your message has been sent successfully</h2>";
								} elseif($hasError === true) {
									echo '<ul class = "errorlist">';
									foreach($errorArray as $key=>$val) {

									echo "<li>" . ucfirst($key) . " field error - $val </li>";
								}
									echo '</ul>';
								}
							?>
			
					 		<p>
							Unesite Vaše Ime:
					 		<input type="text" name = "name" value="<?php echo (isset($name) ? $name : "") ?>" placeholder = "Ime">
					 		</p>
					 		Unesite Vašu E-mail Adresu:
					 		<p><input type="email" name = "email" value="<?php echo (isset($email) ? $email : "") ?>" placeholder = "E-mail">
					 		</p>
					 		<p>
					 			Unesite Poruku:
					 			<textarea name = "message" placeholder="Poruka"><?php echo (isset($message) ? $message : "")?></textarea>
					 		</p>
							<input type="submit" name = "submitForm" value = "Pošalji">
					 	</form>
					  </div> <!-- end  div contact-form -->
				</div> <!-- end col 8-->
			</article> <!-- end main Content -->
			
			<div class="col col-md-4">	
			<?php include("commponents/sidebar.php");?>
			</div>	

		</div> <!-- end row -->


		<div class="social">
						

		</div>

		<div class="row">
			<footer class = "footer-content">
			
				<p class="copyright">
					"Copyright @ 2015 &nbsp;<a href="index.html">Kulturno  Edukativni Centar - TARA</a>
				</p>

				<p class="credit">		
					Powered by Radomir Ranković
				</p>

			</footer>			
		</div> <!-- end row -->

	</div> <!-- end Container-->




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/myscript.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {

			$("#contactForm").validate({
				rules : {
					name: {
						required: true,
						minlength:2
					},
					email: {
						required:true,
						email:true
					},
					message: {
						required: true
					}
				},
				messages: {
					name: {
						required: "Niste upisali ime",
						minlength: "Morate uneti više od 2 ili vise karaktera"
					},
					email:{
						required: "Unesite validnu E-mail adresu",
						email: "Unesite validnu E-mail adresu"
					},
					message: {
						required: "Niste uneli poruku"
					}
				}
			});

		});
	</script>
	
</body>
</html>