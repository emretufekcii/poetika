<?php 

include 'header.php';




//Belirli veriyi seçme işlemi
$menusorgula=$db->prepare("SELECT * FROM menu where menu_seourl=:sef");
$menusorgula->execute(array(
	'sef' => $_GET['sef']
	));
$menuselect=$menusorgula->fetch(PDO::FETCH_ASSOC);


?>



<div class="container">
	
	<div class="row">
		<div class="col-md-9"><!--Main content-->

			 
                        
				<div class="page-header float-left">
                            <div class="page-title">
                                <h5><?php echo $menuselect['menu_ad'] ?></h5>
                            </div>
                        </div>
			
			
			<div class="page-content">
				<p>
					<?php echo $menuselect['menu_detay']; ?>
				</p>

			</div>




		</div>




		<!-- Sidebar buraya gelecek -->
	


	</div>
	<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>