<?php include 'header.php';



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
                                <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Admin ad <span class="required">*</span>
                                            </label><div class="input-group-addon"><i class="fa fa-ellipsis-h"></i></div>
                                    <input type="text" id="input1-group1" name="admin_ad" value="<?php echo $adminselect['admin_ad'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Parola <span class="required">*</span>
                                            </label><div class="input-group-addon"><i class="fa fa-at"></i></div>
                                    <input type="text" id="input1-group1" name="admin_pass" value="<?php echo $adminselect['admin_pass'] ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div>
                               <label class="col-form-label  label-align">ID: 
                                            </label>
                               <input type="text"  name="admin_id"  value="<?php echo $adminselect['admin_id'] ?>" "></div>

                                <div class="item form-group">
                                            <div align="left" class="col-md-6 col-sm-6 offset-md-3">
                                                
                                                <button type="submit" name="adminedit" class="btn btn-success">Güncelle</button>
                         
                                            </div>
                                        </div>

                            </form>
                        </div>
                        
                    </div>
                </div>




                <?php include 'footer.php'; ?>