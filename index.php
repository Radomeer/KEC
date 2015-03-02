<?php include("commponents/header.php");?>


		<?php include("commponents/navigation.php") ?> 

	
		<div class = "row">	
			<article class "mainContent">
				<div class="col col-md-8">
					 <?php include("commponents/carousel.php") ?> 
				</div> <!-- end col 8-->
			</article> <!-- end main Content -->
			
			<div class = "col col-md-4">
				<aside class = "sidebar">
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
					</div> <!--  end categories -->
				</aside>
			</div> <!-- end col-4 -->	

		</div> <!-- end row -->
		
		<?php include("commponents/footer.php");?>