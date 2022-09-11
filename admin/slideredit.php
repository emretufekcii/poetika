<?php include 'header.php';

$slidersorgula=$db->prepare("SELECT * FROM slider WHERE slider_id=:id");
$slidersorgula->execute(array(
  'id' => $_GET['slider_id']
  ));

$sliderselect=$slidersorgula->fetch(PDO::FETCH_ASSOC);


 ?>

 <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Slider Düzenle</strong> 
                        </div>
                        <b>


              <?php 

               
               if (isset($_GET['status'])) {

              if ($_GET['status']=="ok") {?>

              <p style="color:green;">İşlem Başarılı...</p>
              <?php header("Refresh: 1; url=slider.php"); ?>

              <?php } elseif ($_GET['status']=="no") {?>

              <p style="color:red;">İşlem Başarısız...</p>

              <?php }

              }?>


            </b>






                        <div class="card-body card-block">
                            <form action="baglanti/sorgular.php" method="POST"  enctype="multipart/form-data"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                
               

                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <img width="300" src="../<?php echo $sliderselect['slider_resimyol']; ?>">
                </div>
              </div> 

               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="first-name"  name="slider_resimyol"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>          


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Ad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_ad" value="<?php echo $sliderselect['slider_ad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

           
            <!-- Ck Editör Bitiş -->


                <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Link <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="slider_link" value="<?php echo $sliderselect['slider_link'] ?>"  class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Sıra <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="slider_sira" value="<?php echo $sliderselect['slider_sira'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


                 <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Durum<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <select id="heard" class="form-control" name="slider_durum" required>



               




                  <option value="1" <?php echo $sliderselect['slider_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>



                  <option value="0" <?php if ($sliderselect['slider_durum']==0) { echo 'selected=""'; } ?>>Pasif</option>
                  <!-- <?php 

                   if ($slidercek['slider_durum']==0) {?>


                   <option value="0">Pasif</option>
                   <option value="1">Aktif</option>


                   <?php } else {?>

                   <option value="1">Aktif</option>
                   <option value="0">Pasif</option>

                   <?php  }

                   ?> -->


                 </select>
               </div>
             </div>

               <input type="hidden" name="slider_id" value="<?php echo $sliderselect['slider_id'] ?>"> 

                                <div class="item form-group">
                                            <div align="left" class="col-md-6 col-sm-6 offset-md-3">
                                                
                                                <button type="submit" name="slideredit" class="btn btn-success">Güncelle</button>
                         
                                            </div>
                                        </div>

                            </form>
                        </div>
                        
                    </div>
                </div>




                <?php include 'footer.php'; ?>