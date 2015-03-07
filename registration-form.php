<?php include("commponents/header.php");?>


		<?php include("commponents/navigation.php"); ?> 

	
		<div class = "row">	

			<article class="mainContent col col-md-8">
				<div class="registrationForm">
						<h2>Registration form</h2>
						<form class = "registration form-horizontal" action ="#">
							<fieldset id = "personalInfo">
								<legend class ="legend">Personal Info</legend>
								
								<section class ="row">
									<label class = "col col-md-4 control-label" for="myname">Ime i Prezime</label>
									<div class="controls">
										<input class = "col col-md-8" type="text" name = "myname" id="myname" required autofocus placeholder ="Ime, Prezime">
									</div>
								</section>

								<section class = "row">	
									<label class="col col-md-4 control-label" for="companyName">Company Name</label>
									<div class = "controls">
										<input class="col col-md-8" type="text" name = "companyName" id ="companyName" />
									</div>
								</section>			
							
								<section class ="row">
									<label class = "col col-md-4 control-label" for="myEmail">Email</label>
									<div class ="controls">
										<input class="col col-md-8" type="email" name="myEmail" id="myEmail" required autocomplete="off">
									</div>
								</section>
							</fieldset>	<!-- personal info -->

							<fieldset id="otherinfo">
								<legend>Other Info</legend>

							  	<label>Request Type</label>
										<label class="radio">
											<input type="radio" name="requesttype" value="question" /> Question
										</label>

										<label class="radio">
											<input type="radio" name="requesttype" value="comment" /> Comment
										</label>
									
							  	<label>Subscribe</label>
										<label class="checkbox">
											<input type="checkbox" id="subscribe" name="subscribe" CHECKED value="yes" />
											Would you like to subscribe to our e-mail list?
										</label>
								
							  	<label for="reference">How did you hear about the Roux Academy Conference?</label>
										<select   name="reference" id="reference">
											<option>Choose...</option>
											<option value="friend">A friend</option>
											<option value="facebook">Facebook</option>
											<option value="twitter">Twitter</option>
										</select>
							</fieldse>
						

							<button type="submit">Submit</button>
						
						</form>

				</div>
			</article> <!-- end main Content -->
			
			<aside class = "sidebar col col-md-4">
				<div class ="archives">
					<h2>Arhiva</h2>
					<ul>
						<li><a href="">May 2014</a></li>
						<li><a href="">April 2014</a></li>
						<li><a href="">March 2014</a></li>
					</ul>
				</div> <!-- end archives -->
			
				<div class ="categories">
					<h2>Kategorije</h2>
					<ul>
						<li><a href="">Vesti</a></li>
						<li><a href="">Obrazovanje</a></li>
						<li><a href="">Posts</a></li>
					</ul>
				</div> <!--  end categories -->

				<div class ="najnovije">
					<h2>Najnovije</h2>
					<ul>
						<li><a href="">Kako se kalio celik</a></li>
						<li><a href="">O centru</a></li>
						<li><a href="">Hello World</a></li>
					</ul>
				</div> <!--  end najnovije -->
			</aside>

		</div> <!-- end row -->
		
		<?php include("commponents/footer.php");?>