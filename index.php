<?php include 'header.php';


		$slidersorgula=$db->prepare("SELECT * FROM slider");
		$slidersorgula->execute();

		$sliderselect=$slidersorgula->fetch(PDO::FETCH_ASSOC)

 ?>


<!--- Ana sayfa slider --->

<div class="container">
<div id="gecis" class="carousel slide col-md-12" data-ride="carousel">
	 <ol class="carousel-indicators">
	 	<li data-target="#gecis"></li>
	 	<li data-target="#gecis"></li>
	 	<li data-target="#gecis"></li>	
	 </ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="carousel-caption"> <h3 class="sliderbaslik"> </h3> 
				 </div>
		 <a href="<?php echo $sliderselect['slider_link'] ?>"><img src="<?php echo $sliderselect['slider_resimyol'] ?>"> </a>
		</div>

		<div class="carousel-item">

			<a href="<?php echo $sliderselect['slider_link'] ?>"><img src="<?php echo $sliderselect['slider_resimyol'] ?>"> </a>
		</div>

		<div class="carousel-item">
			<a href="<?php echo $sliderselect['slider_link'] ?>"><img src="<?php echo $sliderselect['slider_resimyol'] ?>"> </a>
		</div>
	</div>
	<a href="#gecis" class="carousel-control-next" data-slide="next">
	<span class="carousel-control-next-icon"></span>
	<span class="sr-only"> Next</span> </a>	


	<a href="#gecis" class="carousel-control-prev" data-slide="prev">
	<span class="carousel-control-prev-icon"></span>
	<span class="sr-only"> Previous</span> </a>
</div>
</div></div>
<!---ana sayfa slider sonu-->

<br><hr color=#b27c11><p class="anasayfamakale lead">  | MAKALE | </p><hr color=#b27c11>


<div class="container">
	<div class="row">
	<div class="col-md-4">
	<div class="card">
	 <a href=""><img class="card-img" src="img/unnamed.jpg" alt="Kart Görseli"> </a>
		<div class="card-img-overlay kartlar"> <a href="#"> <h5 class="makalekart">Makale1</h5> </a></div>
	</div>	
	</div>
   <div class="col-md-4">
	<div class="card">
	 <a href="">	<img class="card-img" src="img/franksinatra.jpg" alt="Kart Görseli"> </a>
		<div class="card-img-overlay kartlar"> <a href="#"> <h5 class="makalekart">Makale2</h5> </a></div>
	</div>
   </div>
   <div class="col-md-4">
   	<div class="card">
		<a href=""><img class="card-img" src="img/makale5.jpg" alt="Kart Görseli"> </a>
		<div class="card-img-overlay kartlar"> <a href="#"> <h5 class="makalekart">Makale3</h5> </a></div>
	</div>
   	 
   </div>


</div>


</div>

<br><hr color=#b27c11><p class="anasayfamakale lead">  | İNCELEME | </p><hr color=#b27c11>

<div class="container">
	<div class="row">
	<div class="col-md-4">
	<div class="card">
	 <a href=""><img class="card-img" src="img/makale3.jpg" alt="Kart Görseli"> </a>
		<div class="card-img-overlay kartlar"> <a href="makale.php"> <h5 class="makalekart">İnceleme1</h5> </a></div>
	</div>	
	</div>
   <div class="col-md-4">
	<div class="card">
	 <a href="">	<img class="card-img" src="img/makale4.jpg" alt="Kart Görseli"> </a>
		<div class="card-img-overlay kartlar"> <a href="#"> <h5 class="makalekart">İnceleme2</h5> </a></div>
	</div>
   </div>
   <div class="col-md-4">
   	<div class="card">
		<a href=""><img class="card-img" src="img/makale2.jpg" alt="Kart Görseli"> </a>
		<div class="card-img-overlay kartlar"> <a href="#"> <h5 class="makalekart">İnceleme3</h5> </a></div>
	</div>
   	 
   </div>


</div>
	

</div>

<br><hr color=#b27c11><p class="anasayfamakale lead">  | ŞİİR | </p><hr color=#b27c11>

<div class="container">
	<div class="row">
	<div class="col-md-4">
	<div class="card">
	 <a href=""><img class="card-img" src="http://placehold.it/900x300" alt="Kart Görseli"> </a>
		<div class="card-img-overlay kartlar"> <a href="#"> <h5 class="makalekart">Şiir1</h5> </a></div>
	</div>	
	</div>
   <div class="col-md-4">
	<div class="card">
	 <a href="">	<img class="card-img" src="http://placehold.it/900x300" alt="Kart Görseli"> </a>
		<div class="card-img-overlay kartlar"> <a href="#"> <h5 class="makalekart">Şiir2</h5> </a></div>
	</div>
   </div>
   <div class="col-md-4" style="min-height: 300px">
   	<div class="card">
		<a href=""><img class="card-img" src="http://placehold.it/900x300" alt="Kart Görseli"> </a>
		<div class="card-img-overlay kartlar"> <a href="#"> <h5 class="makalekart">Şiir3</h5> </a></div>
	</div>
   	 
   </div>


</div>
	

</div>

<?php include 'footer.php'; ?>