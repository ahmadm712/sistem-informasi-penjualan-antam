
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="container" style="background-color: #1067c9;">
                    <br>
                        <h1 class="h3 mb-2 text-800" style="color: white;">DATA KONSUMEN <i class="fas fa-crown"></i></h1><br>
                    </div>
                    <br>

                    <?php
                    include "../class-user/user_konsumen.php";
                    $obj = new user_konsumen();
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
                                            <th style="width: 14%">Id Konsumen</th>
                                            <th>Nama Konsumen</th>
                                            <th style="width: 16%">Username</th>
                                            <th style="width: 16%">No Telephone</th>
                                            <th style="width: 18%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php 
                                      while($data = mysqli_fetch_assoc($result)) {
                                      ?>
                                          <td><?php echo $data['id_konsumen'] ?></td>
                                          <td><?php echo $data['nama_konsumen'] ?></td>
                                          <td><?php echo $data['username'] ?></td>
                                          <td><?php echo $data['no_tlpn'] ?></td>
                                          <td><a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $data['id_konsumen']; ?>">Detail</a>
                                          <a onclick="return confirm('Apakah Anda Yakin?')"href="../class-user/operasi-konsumen.php?action=delete&id=<?php echo $data['id_konsumen'] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <div class="modal fade" id="myModal<?php echo $data['id_konsumen']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail Konsumen</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form>
                                                <?php
                                                    $id = $data['id_konsumen']; 
                                                    $resultGet = $obj->getBy_id($id);
                                                    while ($row = mysqli_fetch_array($resultGet)) {  
                                                    ?>
                                                    <div class="form-group row">
                                                        <label for="id" class="col-sm-4 col-form-label">Nama Konsumen</label>
                                                        <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext" id="nama" name="nama" value="<?php echo $row['nama_konsumen']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama" class="col-sm-4 col-form-label">Username</label>
                                                        <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext" id="nama" name="nama" value="<?php echo $row['username']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="stock" class="col-sm-4 col-form-label">No Ktp</label>
                                                        <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext" id="stock" value="<?php echo $row['no_ktp']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="satuan" class="col-sm-4 col-form-label">NPWP</label>
                                                        <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext" id="satuan" value="<?php echo $row['no_npwp']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="satuan" class="col-sm-4 col-form-label">Kontak</label>
                                                        <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext" id="satuan" value="<?php echo $row['no_tlpn']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputUsername" class="col-sm-4 col-form-label">Alamat</label>
                                                        <div class="col-sm-8">
                                                        <textarea readonly class="form-control" id="inputUsername" name="alamat" style="height: 80px;" > <?php echo $row['rincian']; ?>, Desa/namaJL <?php echo $row['desa/nama_jl']; ?>, Kecamatan <?php echo $row['kecamatan']; ?>, Kab/Kota <?php echo $row['kab/kota']; ?>, Provinsi <?php echo $row['provinsi']; ?>. </textarea>
                                                        </div>
                                                    </div>
                                                    <?php 
                                                    }
                                                    ?> 
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
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