<?php include 'header.php'; 


$menusorgula=$db->prepare("SELECT * FROM menu order by menu_sira ASC");
$menusorgula->execute();

?>

   <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Menü Ad</th>
                                            <th>Menü Url</th>
                                            <th>Menü Sira</th>
                                            <th>Menü Durum</th>
                                            <th></th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                           <?php 

                $count=0;

                while($menuselect=$menusorgula->fetch(PDO::FETCH_ASSOC)) { $count++?>


                <tr>
                 <td width="20"><?php echo $count ?></td>
                 <td><?php echo $menuselect['menu_ad'] ?></td>
                 <td><?php echo $menuselect['menu_url'] ?></td>
                 <td><?php echo $menuselect['menu_sira'] ?></td>

                 <td><center><?php 

                  if ($menuselect['menu_durum']==1) {?>

                  <button class="btn btn-success ">Aktif</button>

                 

                <?php } else {?>

                <button class="btn btn-danger">Pasif</button>


                <?php } ?>
              </center>


            </td>


            <td><center><a href="menuedit.php?menu_id=<?php echo $menuselect['menu_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></center></td>
            <td><center><a href="baglanti/sorgular.php?menu_id=<?php echo $menuselect['menu_id']; ?>&menudelete=ok"><button class="btn btn-danger">Sil</button></a></center></td>
          </tr>



          <?php  }

          ?>


        </tbody>
                                   
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>




                <?php include 'footer.php'; ?>