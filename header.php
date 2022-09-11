<?php 

include 'admin/baglanti/baglanti.php'; 
include 'admin/fonksiyon.php';
$setsor=$db->prepare("SELECT * FROM settings WHERE set_id=:id");
$setsor->execute(array('id' => 1));
$setcek=$setsor->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>


<head>
	<!--meta etiket-->
    <meta charset="utf-8">
    <link rel="icon" href="p-icon.png" type="image/x-icon" />
	<title><?php echo $setcek['set_title'] ?></title>
    <meta name="keywords" content="<?php echo $setcek['set_keyword'] ?>">
    <meta name="description" content="<?php echo $setcek['set_description'] ?>">
    <meta name="author" content="<?php echo $setcek['set_author'] ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     <!--Fontawesome-->
    <script src="https://kit.fontawesome.com/6592dd4cae.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS Entegrasyon-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!--stil.css dosyası -->
	<link rel="stylesheet" type="text/css" href="stil.css">


	
	
</head>


 
<body>


	<div class="row" style="background-color: #b27c11">
		<div class="col-md-4"> 
            
         </div>
        
        <div class="col-md-4 " align="center" > 
           <a href="index.php"> <img src="img/anasayfalogo.png"  
           	 width="300px" alt="poetika"> </a> 
         </div>

         <!--sosyal medya ikonları-->
        <div class="col-md-4 ">

        	 <a href="<?php echo $setcek['set_fb'] ?>" target="_blank"> <i class="fab fa-facebook" id="sosyalmedya" style="margin-left:5px"></i> </a>
        	 <a href="<?php echo $setcek['set_youtube'] ?>" target="_blank"> <i class="fab fa-youtube" id="sosyalmedya" style="margin-left:5px"></i> </a>
            <a href="<?php echo $setcek['set_fb'] ?>" target="_blank"> <i class="fab fa-linkedin" id="sosyalmedya" style="margin-left:5px"></i> </a>
         	<a href="<?php echo $setcek['set_ig'] ?>" target="_blank"> <i class="fab fa-instagram" id="sosyalmedya" style="margin-left:5px"></i> </a>
        	<a href="<?php echo $setcek['set_tw'] ?>" target="_blank"> <i class="fab fa-twitter" id="sosyalmedya" style="margin-left:5px"></i> </a>
        	<a href="<?php echo $setcek['set_pinterest'] ?>" target="_blank"> <i class="fab fa-pinterest" id="sosyalmedya" style="margin-left:5px"></i> </a>

         </div>
       
    </div>

 <!--navbar--->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
	<button class="navbar-toggler" data-toggle="collapse" type="button" data-target="#menuler"> <span class="navbar-toggler-icon"></span> </button>
<div class="container">
	<div id="menuler" class="collapse navbar-collapse navbar-expand-lg col-md-6">
 <ul class="navbar-nav">
    
    <li class="nav-item" > 
  	    <a href="index.php" class="nav-link"> ANA SAYFA </a></li>


<?php  $menusorgula=$db->prepare("SELECT * FROM menu WHERE menu_durum=:durum");
$menusorgula->execute(array('durum' => 1));


while($menuselect=$menusorgula->fetch(PDO::FETCH_ASSOC)) {	
?>

<li class="nav-item active" style="margin-left:20px"> 
	 	<a href="
	 	<?php 
   if (!empty($menuselect['menu_url'])) {

          echo $menuselect['menu_url'];

        } else {


          echo "sayfa-".seo($menuselect['menu_ad']);

        }

	 	 ?>
	 	" class="nav-link"><?php echo $menuselect['menu_ad'] ?>
	 		
	 	</a>
	 
	 	
 </li>
      <?php } ?>
	
	
 </ul>
 </div>

  
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Sitede arayın..." aria-label="Search">
    <button class="btn btn-outline- my-2 my-sm-0" style="background-color: #b27c11" type="submit">ARA</button>
  </form>

	</div>
</div>
</nav>

<!--- navbar + logo  --->