
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="container" style="background-color: #1067c9;">
                    <br>
                        <h1 class="h3 mb-2 text-800" style="color: white;">DATA VENDOR PT ANTAM</h1>
                        <a class="btn btn-light" href="?page=penambahan_vendor" ><i class="fas fa-plus"></i>      Tambah Vendor</a>
                            <?php 
                                if(@$_GET['page'] == 'penambahan_vendor'){
                                    include "data-vendor.php";
                                }
                            ?>
                        <br>
                        <br>
                    </div>
                    <br>

                    <?php
                    include "../class-user/user_vendor.php";
                    $obj = new vendor();
                    $result=$obj->showData();

                    ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 12%">Id Vendor</th>
                                            <th style="width: 32%">Nama Vendor</th>
                                            <th style="width: 30%">Kontak</th>
                                            <th style="width: 16%">Aksi</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php 
                                      while($data = mysqli_fetch_assoc($result)) {
                                      ?>
                                          <td style="width: 12%"><?php echo $data['id_vendor'] ?></td>
                                          <td style="width: 32%"><?php echo $data['nama'] ?></td>
                                          <td style="width: 30%"><?php echo $data['kontak'] ?></td>
                                          <td style="width: 16%"><a href="" class="btn btn-primary"  data-toggle="modal" data-target="#myModal<?php echo $data['id_vendor']; ?>">Detail</a>
                                          <a onclick="return confirm('Apakah Anda Yakin?')"href="../class-user/operasi-vendor.php?action=delete&id=<?php echo $data['id_vendor'] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    
                                    <div class="modal fade" id="myModal<?php echo $data['id_vendor']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail Vendor</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form method="post" action="../class-user/operasi-vendor.php?action=update">
                                                <?php
                                                    $id = $data['id_vendor']; 
                                                    $resultGet = $obj->getID($id);
                                                    // $query_edit = mysqli_query($koneksi, "SELECT * FROM bahan_baku WHERE id_bahan='$id'");
                                                    while ($row = mysqli_fetch_array($resultGet)) {  
                                                    ?>
                                                        <input type="hidden" readonly class="form-control-plaintext" id="id" name="id_vendor" value="<?php echo $row['id_vendor']; ?>">
                                                    <div class="form-group row">
                                                        <label for="inputnama" class="col-sm-4 col-form-label">Nama Vendor</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="inputNama" name="nama" value="<?php echo $row['nama']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputNotlpn" class="col-sm-4 col-form-label">Kontak</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="inputNo_tlpn" name="kontak" value="<?php echo $row['kontak']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputUsername" class="col-sm-4 col-form-label">Alamat</label>
                                                        <div class="col-sm-8">
                                                        <textarea class="form-control" id="inputUsername" name="alamat" style="height: 80px;" > <?php echo $row['alamat']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary" >Update</a>
                                                    </div>
                                                    <?php 
                                                    }
                                                    ?> 
                                                </form>
                                            </div>

                                            </div>
                                        </div>
                                        </div>

                                      <?php
                                          }
                                      ?>
                                    </table>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->