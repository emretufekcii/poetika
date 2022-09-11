<?php include 'header.php'; 


$adminsorgula=$db->prepare("SELECT * FROM adminler");
$adminsorgula->execute();

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
                                            <th>Admin Ad</th>
                                            <th>Admin Pass</th>
                                            <th>İşlemler</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                        while($adminselect=$adminsorgula->fetch(PDO::FETCH_ASSOC)) {?> 





                          <tr>
                          <td><?php echo $adminselect['admin_ad']; ?></td>
                          <td><?php echo  $adminselect['admin_pass']; ?></td>
                          

                          <td><center><a href="adminedit.php?admin_id=<?php echo $adminselect['admin_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>

                          
                          <td><center><a href="baglanti/sorgular.php?admin_id=<?php echo $adminselect['admin_id']; ?>&admindelete=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                </tr>
                         <?php }
                         ?>
                        
                                   
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>




                <?php include 'footer.php'; ?>