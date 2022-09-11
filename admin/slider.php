<?php include 'header.php'; 


$slidersorgula=$db->prepare("SELECT * FROM slider");
$slidersorgula->execute();

?>



   <div class="content">


   
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Slider Ayarları</strong>
                            </div>

                            <h2><small>

              <?php 


               if (isset($_GET['durum'])) {

              if ($_GET['durum']=="ok") {?>

              <p style="color:green;">İşlem Başarılı...</p>

              <?php } elseif ($_GET['durum']=="no") {?>

              <p style="color:red;">İşlem Başarısız...</p>

              <?php }

              }?>


            </small></h2>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Görsel</th>
                                            <th>Slider Ad</th>
                                            <th>Url</th>
                                            <th>Sıra</th>
                                            <th>Durum</th>
                                            <th></th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                           <?php 

                $count=0;

                while($sliderselect=$slidersorgula->fetch(PDO::FETCH_ASSOC)) { $count++?>


                <tr>
                 <td width="20"><?php echo $count ?></td>
                 <td><img width="200" src="../<?php echo $sliderselect['slider_resimyol'] ?>"></td>
                 <td><?php echo $sliderselect['slider_ad'] ?></td>
                 <td><?php echo $sliderselect['slider_link'] ?></td>
                 <td><?php echo $sliderselect['slider_sira'] ?></td>

                 <td><center><?php 

                  if ($sliderselect['slider_durum']==1) {?>

                  <button class="btn btn-success ">Aktif</button>

                 

                <?php } else {?>

                <button class="btn btn-danger">Pasif</button>


                <?php } ?>
              </center>


            </td>


            <td><center><a href="slideredit.php?slider_id=<?php echo $sliderselect['slider_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></center></td>
            <td><center><a href="baglanti/sorgular.php?slider_id=<?php echo $sliderselect['slider_id']; ?>&sliderdelete=ok"><button class="btn btn-danger">Sil</button></a></center></td>
          </tr>



          <?php  }

          ?>


        </tbody>
                                   
                                       
                                        
                                    </tbody>
                                </table>

                                <!--slider ekleme butonu  -->
                                  <div align="center">
        <a href="sliderekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>
    </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>




                <?php include 'footer.php'; ?>