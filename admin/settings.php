<?php include 'header.php'; ?>

 <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Site Ayarları</strong> 
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
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Site Başlığı <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-ellipsis-h"></i></div>
                                    <input type="text" id="input1-group1" name="set_title" value="<?php echo $setcek['set_title'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Yazar <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-at"></i></div>
                                    <input type="text" id="input1-group1" name="set_author" value="<?php echo $setcek['set_author'] ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Açıklama <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-archive"></i></div>
                                    <input type="text" id="input1-group1" name="set_description" value="<?php echo $setcek['set_description'] ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Keyword <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-key"></i></div>
                                    <input type="text" id="input1-group1" name="set_keyword" value="<?php echo $setcek['set_keyword'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Adres <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-map-pin"></i></div>
                                    <input type="text" id="input1-group1" name="set_adres" value="<?php echo $setcek['set_adres'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tel <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" id="input1-group1" name="set_tel" value="<?php echo $setcek['set_tel'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Faks <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-fax"></i></div>
                                    <input type="text" id="input1-group1" name="set_faks" value="<?php echo $setcek['set_faks'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Maps <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-map"></i></div>
                                    <input type="text" id="input1-group1" name="set_map" value="<?php echo $setcek['set_map'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Facebook <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-facebook"></i></div>
                                    <input type="text" id="input1-group1" name="set_fb" value="<?php echo $setcek['set_fb'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Youtube <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-youtube"></i></div>
                                    <input type="text" id="input1-group1" name="set_youtube" value="<?php echo $setcek['set_youtube'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Instagram <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-instagram"></i></div>
                                    <input type="text" id="input1-group1" name="set_ig" value="<?php echo $setcek['set_ig'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                 <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Twitter <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-twitter"></i></div>
                                    <input type="text" id="input1-group1" name="set_tw" value="<?php echo $setcek['set_tw'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <div class="col col-md-6">
                                        <div class="input-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Pinterest <span class="required">*</span>
											</label><div class="input-group-addon"><i class="fa fa-pinterest"></i></div>
                                    <input type="text" id="input1-group1" name="set_pinterest" value="<?php echo $setcek['set_pinterest'] ?>"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                            <div align="left" class="col-md-6 col-sm-6 offset-md-3">
                                                
                                                <button type="submit" name="settingsedit" class="btn btn-success">Güncelle</button>
                         
                                            </div>
                                        </div>

                            </form>
                        </div>
                        
                    </div>
                </div>




                <?php include 'footer.php'; ?>