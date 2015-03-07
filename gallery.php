<?php include("commponents/header.php");?>


		<?php include("commponents/navigation.php") ?> 

	
		<div class = "row">	
			<article class "mainContent">
				<div class="col col-md-8">
					<div class="gallery">
				

						<ul>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/interakcije/interackije_slika1.jpg"><img src="images/gallery/interakcije/thumbs/interackije_slika1_sm.jpg" alt=""></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/interakcije/interackije_slika2.jpg"><img src="images/gallery/interakcije/thumbs/interackije_slika2_sm.jpg" alt=""></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/interakcije/interackije_slika3.jpg"><img src="images/gallery/interakcije/thumbs/interackije_slika3_sm.jpg" alt=""></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/interakcije/interackije_slika4.jpg"><img src="images/gallery/interakcije/thumbs/interackije_slika4_sm.jpg" alt=""></a></li>
							<li class="tthumbnail"><a href="images/gallery/o-autizmu-bez-straha/o_autizmu_bez_straha_slika1.jpg" class="fancybox" rel="group"><img src="images/gallery/o-autizmu-bez-straha/thumbs/o_autizmu_bez_straha_slika1_sm.jpg" alt=""></a></li>
							<li class="tthumbnail"><a href="images/gallery/o-autizmu-bez-straha/o_autizmu_bez_straha_slika2.jpg" class="fancybox" rel="group"><img src="images/gallery/o-autizmu-bez-straha/o_autizmu_bez_straha_slika2_crooped.jpg" alt=""></a></li>
							<li class="tthumbnail"><a href="images/gallery/o-autizmu-bez-straha/o_autizmu_bez_straha_slika3.jpg" class="fancybox" rel="group"><img src="images/gallery/o-autizmu-bez-straha/thumbs/o_autizmu_bez_straha_slika3_sm.jpg" alt=""></a></li>
							<li class="tthumbnail"><a href="images/gallery/o-autizmu-bez-straha/o_autizmu_bez_straha_slika4.jpg" class="fancybox" rel="group"><img src="images/gallery/o-autizmu-bez-straha/thumbs/o_autizmu_bez_straha_slika4_sm.jpg" alt=""></a></li>
						</ul>


			<!-- 			<div class="pic">
				<div class = "tthumbnail">
					<a class="fancybox" rel="group" href="images/gallery/interakcije/interackije_slika1.jpg"><img src="images/gallery/interakcije/thumbs/interackije_slika1_sm.jpg" alt=""></a>
				</div>
				<div class = "tthumbnail">
					<a class="fancybox" rel="group" href="images/gallery/interakcije/interackije_slika2.jpg"><img src="images/gallery/interakcije/thumbs/interackije_slika2_sm.jpg" alt=""></a>
				</div>
				<div class = "tthumbnail">
					<img src="images/gallery/interakcije/interackije_slika3.jpg" alt="">
				</div>
				<div class = "tthumbnail">
					<img src="images/gallery/interakcije/interackije_slika4.jpg" alt="">
				</div>
			
				<div class = "tthumbnail">
					<img src="images/gallery/o-autizmu-bez-straha/o_autizmu_bez_straha_slika1.jpg" alt="">
				</div>
				<div class = "tthumbnail">
					<img src="images/gallery/o-autizmu-bez-straha/o_autizmu_bez_straha_slika2_crooped.jpg" alt="">
				</div>
				<div class = "tthumbnail">
					<img src="images/gallery/o-autizmu-bez-straha/o_autizmu_bez_straha_slika3.jpg" alt="">
				</div>
				<div class = "tthumbnail">
					<img src="images/gallery/o-autizmu-bez-straha/o_autizmu_bez_straha_slika4.jpg" alt="">
				</div>
			
			</div> -->

					</div>
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
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/myscript.js"></script>
	<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript">

	$(document).ready(function() {
		$(".fancybox").fancybox();
	});

	$('#fancybox-wrap').bind('contextmenu', function() {
    alert('sorry, Right Click Disabled :P'); //do stuff
    return false;
});

	</script>
		
  
</body>
</html>