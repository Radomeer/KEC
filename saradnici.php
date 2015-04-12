<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1.0">
	<title>Kulturno-Edukativni Centar - TARA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mycustom.css">
	<script type="text/javascript" src="js/respond.js"></script>
</head>


<body data-spy = "scroll" data-target=".scrollspy">

	
	<div class="container">
	
		<?php include('commponents/header.php'); ?>

		<?php include("commponents/navigation.php") ?> 

		<div class = "row">	
			<article class "mainContent">
				<div class="col col-md-8">
					 <?php include("commponents/lista_saradnika.php") ?> 
				</div> <!-- end col 8-->
			</article> <!-- end main Content -->
			
			<div class = "col col-md-4">
				<?php include('commponents/sidebar.php'); ?>
			</div> <!-- end col-4 -->	

		</div> <!-- end row -->

	<?php include("commponents/footer.php");?>

	</div> <!-- end Container-->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/myscript.js"></script>

	
		
</body>
</html>