<?php include 'header.php'; ?>
<!-- iletisim blok -->
<div class="container">
            <div class="iletisimresim">
                <i class="fas fa-mail-bulk"></i>
            </div>
            <form >
                <h3 class="mesaj-text">Bize Mesaj Bırakabilirsiniz</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Adınız ve soyadınız">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="Email Adresiniz" >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Telefon Numaranız" >
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="iletisimbuton" value="Gönder" />
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea  class="form-control" placeholder="Mesajınızı giriniz" style="width: 100%; height: 210px;"> </textarea>
                        </div>
                    </div>
                </div>
                
            
            </form>

</div>

<div class="container">
  <div class="row">
  <div class="col-md-7" style="max-height: 400px"> <iframe src="<?php echo $setcek['set_map'] ?>" width="500" height="350" frameborder="0" style="border: 1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
 
 <div class="col-md-5"> 
 <div class="card">
   
<p><?php echo $setcek['set_adres'] ?> </p>
<hr>
<p>Tel no: <?php echo $setcek['set_tel'] ?> </p>
<hr>
<p>Faks: <?php echo $setcek['set_faks'] ?> </p>
 </div>

</div>
</div>
</div>

<?php include 'footer.php'; ?>