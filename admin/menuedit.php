<?php include 'header.php';

$menusorgula=$db->prepare("SELECT * FROM menu WHERE menu_id=:id");
$menusorgula->execute(array(
  'id' => $_GET['menu_id']
  ));

$menuselect=$menusorgula->fetch(PDO::FETCH_ASSOC);


 ?>

 <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Admin Düzenle</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="baglanti/sorgular.php" method="POST" class="form-horizontal">
                                <i>    <?php 
 
                                    if (isset($_GET['status'])) {
 
                                    if ($_GET['status']=="ok") { ?>
 
                                        <div class="alert alert-success">
                                            <strong>Başarılı!</strong>
                                        </div>
 
                                <?php } elseif ($_GET['status']=="no") { ?>
                                        <div class="alert alert-danger">
                                            <strong>Hata!</strong>
                                        </div>
                                        
                                <?php }
 
                                }?>
                                </i>
                          

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Ad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="menu_ad" value="<?php echo $menuselect['menu_ad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <!-- Ck Editör Başlangıç -->

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Detay <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  class="ckeditor" id="editor1" name="menu_detay"><?php echo $menuselect['menu_detay']; ?></textarea>
                </div>
              </div>

              <script type="text/javascript">

               CKEDITOR.replace( 'editor1',

               {

                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                forcePasteAsPlainText: true

              } 

              );

            </script>

            <!-- Ck Editör Bitiş -->


                <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Url <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="menu_url" value="<?php echo $menuselect['menu_url'] ?>"  class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Sıra <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="menu_sira" value="<?php echo $menuselect['menu_sira'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


                 <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Durum<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <select id="heard" class="form-control" name="menu_durum" required>



               




                  <option value="1" <?php echo $menuselect['menu_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>



                  <option value="0" <?php if ($menuselect['menu_durum']==0) { echo 'selected=""'; } ?>>Pasif</option>
                  <!-- <?php 

                   if ($menucek['menu_durum']==0) {?>


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

               <input type="hidden" name="menu_id" value="<?php echo $menuselect['menu_id'] ?>"> 

                                <div class="item form-group">
                                            <div align="left" class="col-md-6 col-sm-6 offset-md-3">
                                                
                                                <button type="submit" name="menuedit" class="btn btn-success">Güncelle</button>
                         
                                            </div>
                                        </div>

                            </form>
                        </div>
                        
                    </div>
                </div>




                <?php include 'footer.php'; ?>