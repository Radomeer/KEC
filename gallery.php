<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1.0">
	<title>Kulturno-Edukativni Centar - TARA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mycustom.css">
	<script type="text/javascript" src="js/respond.js"></script>
	<script type="text/javascript">
		function ajax_json_gallery(folder) {
			var thumbnailbox = document.getElementById("thumbnailbox");
			var header = document.getElementById("header");
			var request = new XMLHttpRequest();
			request.open("POST", "images/gallery/json_gallery_data.php", true);
			request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			request.onreadystatechange = function() {
				if(request.readyState == 4 && request.status == 200) {
					var data = JSON.parse(request.responseText);
					thumbnailbox.innerHTML = "";
					header.innerHTML = '<h2>'+folder.replace(/_/g," ")+'</h2>';
					var output = "<ul>\r\n";
					for(var object in data) {
						if(data[object].src) {
							var imgSrc = data[object].src;
							var currentDir = folder;
					
							var substrImgSrc = imgSrc.substr(currentDir.length, imgSrc.length);
						
							output += '<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/'+data[object].src+'"><img src="images/gallery/'+currentDir+'/thumbs'+substrImgSrc+'"></a></li>\r\n' ;					
							
						}
					}
					output += "</ul>";
					console.log(output);
					thumbnailbox.innerHTML = output;
				}
			}
			request.send("folder="+folder);
		}
	</script>
</head>


<body>

	
	<div class="container">
		
		<?php include('commponents/header.php'); ?>

		<?php include("commponents/navigation.php"); ?> 

	
		<div class = "row">	
			<article class "mainContent">
				<div class="col col-md-8">

					<div class = "albums clearfix">
						<a href="#" onclick="return false" onmousedown="ajax_json_gallery('interakcije');"><div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="images/gallery/cover_photos/interakcije1_album_cover300x200.jpg" /></div></a>
				        <a href="#" onclick="return false" onmousedown="ajax_json_gallery('o_autizmu_bez_straha');"><div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="images/gallery/cover_photos/o_autizmu_bez_straha_album_cover300x200.jpg" /></div></a>
				        <a href="#" onclick="return false" onmousedown="ajax_json_gallery('borba');"><div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="images/gallery/cover_photos/borba_album_cover300x200.jpg" /></div></a>
				        <a href="#"onclick="return false" onmousedown="ajax_json_gallery('sta_sada_osecas');"><div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="images/gallery/cover_photos/sta_sada_osecas_album_cover300x200.jpg" /></div></a>
				 	  	<a href="#"onclick="return false" onmousedown="ajax_json_gallery('Odgovor');"><div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="images/gallery/cover_photos/odgovor_album_cover300x200.jpg" /></div></a>						        
				 	  	<a href="" onclick="return false" onmousedown="ajax_json_gallery('ti_i_ja_vs_vetrenjace');"><div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="images/gallery/cover_photos/vetrenjace_album_cover300x200.jpg" /></div></a>
					    <a href="#"onclick="return false" onmousedown="ajax_json_gallery('u_naselju');"><div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="images/gallery/cover_photos/u_naselju_album_cover300x200.jpg" /></div></a>
				  		<a href=""onclick="return false" onmousedown="ajax_json_gallery('svaki_dan_je_moj_i_tvoj');"><div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="images/gallery/cover_photos/svaki_dan1_album_cover300x200.jpg" /></div></a>
					</div> 
						<div class="gallery">
							<div id = "header">								
							</div> <!-- end header -->
							<div id="thumbnailbox">
							</div> <!-- end thumbnailbox -->
						</div>	<!-- end gallery div -->

	<!--					
					  <div class="gallery">
						<ul>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/interakcije/interackije1.jpg"><img src="images/gallery/interakcije/thumbs/interackije1_tn.jpg" alt="Fotografija sa tribine Interakcije sa publikom" title="Tribina Interakcije"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/interakcije/interackije2.jpg"><img src="images/gallery/interakcije/thumbs/interackije2_tn.jpg" alt="Fotografija sa tribine Interakcije sa publikom" title="Tribina Interakcije"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/interakcije/interackije3.jpg"><img src="images/gallery/interakcije/thumbs/interackije3_tn.jpg" alt="Fotografija sa tribine Interakcije sa publikom" title="Tribina Interakcije"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/interakcije/interackije4.jpg"><img src="images/gallery/interakcije/thumbs/interackije4_tn.jpg" alt="Fotografija sa tribine Interakcije sa publikom" title="Tribina Interakcije"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/o_autizmu_bez_straha/o_autizmu_bez_straha11.jpg" ><img src="images/gallery/o_autizmu_bez_straha/thumbs/o_autizmu_bez_straha1_tn.jpg" alt="Fotografija sa tribine o autizmu bez straha" title="Tribina O autizmu bez straha"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/o_autizmu_bez_straha/o_autizmu_bez_straha22.jpg" ><img src="images/gallery/o_autizmu_bez_straha/thumbs/o_autizmu_bez_straha2_tn.jpg" alt="Fotografija sa tribine o autizmu bez straha" title="Tribina O autizmu bez straha"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/o_autizmu_bez_straha/o_autizmu_bez_straha33.jpg" ><img src="images/gallery/o_autizmu_bez_straha/thumbs/o_autizmu_bez_straha3_tn.jpg" alt="Slika sa tribine o autizmu bez straha" title="Tribina O autizmu bez straha"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/o_autizmu_bez_straha/o_autizmu_bez_straha44.jpg" ><img src="images/gallery/o_autizmu_bez_straha/thumbs/o_autizmu_bez_straha4_tn.jpg" alt="Fotografija sa tribine o autizmu bez straha" title="Tribina O autizmu bez straha"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/o_autizmu_bez_straha/o_autizmu_bez_straha5.jpg" ><img src="images/gallery/o_autizmu_bez_straha/thumbs/o_autizmu_bez_straha5_tn.jpg" alt="Fotografija sa tribine o autizmu bez straha" title="Tribina O autizmu bez straha"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/o_autizmu_bez_straha/o_autizmu_bez_straha6.jpg" ><img src="images/gallery/o_autizmu_bez_straha/thumbs/o_autizmu_bez_straha6_tn.jpg" alt="Fotografija sa tribine o autizmu bez straha" title="Tribina O autizmu bez straha"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/sta_sada_osecas/sta_sada_osecas11.jpg"><img src="images/gallery/sta_sada_osecas/thumbs/sta_sada_osecas1_tn.jpg" alt="Fotografija sa projekta Sta sada osecaš" title="Sta Sada Osecaš"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/sta_sada_osecas/sta_sada_osecas22.jpg"><img src="images/gallery/sta_sada_osecas/thumbs/sta_sada_osecas2_tn.jpg" alt="Fotografija sa projekta Sta sada osecaš" title="Sta Sada Osecaš"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/sta_sada_osecas/sta_sada_osecas33.jpg"><img src="images/gallery/sta_sada_osecas/thumbs/sta_sada_osecas3_tn.jpg" alt="Fotografija sa projekta Sta sada osecaš" title="Sta Sada Osecaš"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/sta_sada_osecas/sta_sada_osecas44.jpg"><img src="images/gallery/sta_sada_osecas/thumbs/sta_sada_osecas4_tn.jpg" alt="Fotografija sa projekta Sta sada osecaš" title="Sta Sada Osecaš"></a></li>				
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/sta_sada_osecas/sta_sada_osecas5.jpg"><img src="images/gallery/sta_sada_osecas/thumbs/sta_sada_osecas5_tn.jpg" alt="Fotografija sa projekta Sta sada osecaš" title="Sta Sada Osecaš"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/sta_sada_osecas/sta_sada_osecas6.jpg"><img src="images/gallery/sta_sada_osecas/thumbs/sta_sada_osecas6_tn.jpg" alt="Fotografija sa projekta Sta sada osecaš" title="Sta Sada Osecaš"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/sta_sada_osecas/sta_sada_osecas7.jpg"><img src="images/gallery/sta_sada_osecas/thumbs/sta_sada_osecas7_tn.jpg" alt="Fotografija sa projekta Sta sada osecaš" title="Sta Sada Osecaš"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/sta_sada_osecas/sta_sada_osecas8.jpg"><img src="images/gallery/sta_sada_osecas/thumbs/sta_sada_osecas8_tn.jpg" alt="Fotografija sa projekta Sta sada osecaš" title="Sta Sada Osecaš"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/izadji_i_bori_se/bori_se1.jpg"><img src="images/gallery/izadji_i_bori_se/thumbs/bori_se1_tn.jpg" alt="Fotografija sa projekta Izadi i bori se" title="Izadi i bori se"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/izadji_i_bori_se/bori_se2.jpg"><img src="images/gallery/izadji_i_bori_se/thumbs/bori_se2_tn.jpg" alt="Fotografija sa projekta Izadi i bori se" title="Izadi i bori se"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/izadji_i_bori_se/bori_se3.jpg"><img src="images/gallery/izadji_i_bori_se/thumbs/bori_se3_tn.jpg" alt="Fotografija sa projekta Izadi i bori se" title="Izadi i bori se"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/izadji_i_bori_se/bori_se4.jpg"><img src="images/gallery/izadji_i_bori_se/thumbs/bori_se4_tn.jpg" alt="Fotografija sa projekta Izadi i bori se" title="Izadi i bori se"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/izadji_i_bori_se/bori_se5.jpg"><img src="images/gallery/izadji_i_bori_se/thumbs/bori_se5_tn.jpg" alt="Fotografija sa projekta Izadi i bori se" title="Izadi i bori se"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/izadji_i_bori_se/bori_se6.jpg"><img src="images/gallery/izadji_i_bori_se/thumbs/bori_se6_tn.jpg" alt="Fotografija sa projekta Izadi i bori se" title="Izadi i bori se"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/izadji_i_bori_se/bori_se7.jpg"><img src="images/gallery/izadji_i_bori_se/thumbs/bori_se7_tn.jpg" alt="Fotografija sa projekta Izadi i bori se" title="Izadi i bori se"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/izadji_i_bori_se/bori_se8.jpg"><img src="images/gallery/izadji_i_bori_se/thumbs/bori_se8_tn.jpg" alt="Fotografija sa projekta Izadi i bori se" title="Izadi i bori se"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/izadji_i_bori_se/bori_se9.jpg"><img src="images/gallery/izadji_i_bori_se/thumbs/bori_se9_tn.jpg" alt="Fotografija sa projekta Izadi i bori se" title="Izadi i bori se"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/izadji_i_bori_se/bori_se10.jpg"><img src="images/gallery/izadji_i_bori_se/thumbs/bori_se10_tn.jpg" alt="Fotografija sa projekta Izadi i bori se" title="Izadi i bori se"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/izadji_i_bori_se/bori_se11.jpg"><img src="images/gallery/izadji_i_bori_se/thumbs/bori_se11_tn.jpg" alt="Fotografija sa projekta Izadi i bori se" title="Izadi i bori se"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/borba/borba1.jpg"><img src="images/gallery/borba/thumbs/borba1_tn.jpg" alt="Fotografija sa projekta borba" title="Borba"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/borba/borba2.jpg"><img src="images/gallery/borba/thumbs/borba2_tn.jpg" alt="Fotografija sa projekta borba" title="Borba"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/borba/borba3.jpg"><img src="images/gallery/borba/thumbs/borba3_tn.jpg" alt="Fotografija sa projekta borba" title="Borba"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/humanitarni_koncert/koncert1.jpg"><img src="images/gallery/humanitarni_koncert/thumbs/koncert1_tn.jpg" alt="Fotografija sa humanitarnog koncerta u Ustanovi Kulture-Palilula" title ="Humanitarni Koncert- UK Palilua"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/odgovor/odgovor1.jpg"><img src="images/gallery/odgovor/thumbs/odgovor1_tn.jpg" alt="Fotografija sa tribine Odgovor" title = "Tribina Odgovor"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/odgovor/odgovor2.jpg"><img src="images/gallery/odgovor/thumbs/odgovor2_tn.jpg" alt="Fotografija sa tribine Odgovor" title = "Tribina Odgovor"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/odgovor/odgovor3.jpg"><img src="images/gallery/odgovor/thumbs/odgovor3_tn.jpg" alt="Fotografija sa tribine Odgovor" title = "Tribina Odgovor"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/odgovor/odgovor4.jpg"><img src="images/gallery/odgovor/thumbs/odgovor4_tn.jpg" alt="Fotografija sa tribine Odgovor" title = "Tribina Odgovor"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/odgovor/odgovor5.jpg"><img src="images/gallery/odgovor/thumbs/odgovor5_tn.jpg" alt="Fotografija sa tribine Odgovor" title = "Tribina Odgovor"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/odgovor/odgovor6.jpg"><img src="images/gallery/odgovor/thumbs/odgovor6_tn.jpg" alt="Fotografija sa tribine Odgovor" title = "Tribina Odgovor"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/odgovor/odgovor7.jpg"><img src="images/gallery/odgovor/thumbs/odgovor7_tn.jpg" alt="Fotografija sa tribine Odgovor" title = "Tribina Odgovor"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/odgovor/odgovor8.jpg"><img src="images/gallery/odgovor/thumbs/odgovor8_tn.jpg" alt="Fotografija sa tribine Odgovor" title = "Tribina Odgovor"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/odgovor/odgovor9.jpg"><img src="images/gallery/odgovor/thumbs/odgovor9_tn.jpg" alt="Fotografija sa tribine Odgovor" title = "Tribina Odgovor"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan1.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan1_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan2.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan2_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan3.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan3_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan4.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan4_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan5.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan5_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan6.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan6_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan7.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan7_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan8.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan8_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan9.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan9_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan10.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan10_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan11.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan11_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan12.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan12_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan13.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan13_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan14.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan14_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan15.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan15_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/svaki_dan_je_moj_i_tvoj/svaki_dan16.jpg"><img src="images/gallery/svaki_dan_je_moj_i_tvoj/thumbs/svaki_dan16_tn.jpg" alt="Fotografija sa projekta Svaki dan je moj i tvoj" title ="Fotografija sa projekta Svaki dan je moj i tvoj"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace1.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace1_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace2.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace2_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace3.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace3_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace4.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace4_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace5.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace5_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace6.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace6_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace7.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace7_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace8.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace8_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace9.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace9_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace10.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace10_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace12.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace12_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace13.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace13_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace14.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace14_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace15.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace15_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace16.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace16_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace17.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace17_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace18.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace18_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace19.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace19_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace20.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace20_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace21.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace21_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace22.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace22_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace23.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace23_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjače" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace24.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace24_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjač2" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
							<li class="tthumbnail"><a class="fancybox" rel="group" href="images/gallery/ti_i_ja_vs_vetrenjace/vetrenjace25.jpg"><img src="images/gallery/ti_i_ja_vs_vetrenjace/thumbs/vetrenjace25_tn.jpg" alt="Fotografija sa dogadjaja Ti i Ja VS Vetrenjač2" title = "Dogadjaj Ti i Ja VS Vetrenjače"></a></li>
						</ul>
 
					</div> --><!-- end galery div --> 
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
<!-- 	<script type="text/javascript">ajax_json_gallery('interakcije'); </script>
 -->		
  
</body>


</html>