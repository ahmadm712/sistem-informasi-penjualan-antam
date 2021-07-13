
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="container" style="background-color: #1067c9;">
                    <br>
                        <h1 class="h3 mb-2 text-800" style="color: white;">DATA PRODUKSI</h1>
                        <a class="btn btn-light" href="?page=penambahan_produksi" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-plus"></i>      Produksi Baru</a>
                          <!-- Button trigger modal -->
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                        </button> -->

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Laporan Produksi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form method="post" action="class-produksi/operasi-LP.php?action=add">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Produksi</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Masukan Nama Produksi Baru">
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                            </form>
                        </div>
                        </div>
                        <br>
                        <br>
                    </div>
                    <br>

                    <?php
                    include "class-produksi/laporan-produksi.php";
                    $obj = new laporan();
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
                                            <th>id Produksi</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php 
                                      while($data = mysqli_fetch_assoc($result)) {
                                      ?>
                                          <td style="width: 17%"><?php echo $data['kode_produksi'] ?></td>
                                          <td><?php echo $data['nama_produksi'] ?></td>
                                          <td style="width: 12%"><?php echo $data['tanggal'] ?></td>
                                          <td style="width: 18%"><a href="../karyawan/update_BB.php?id=<?php echo $data['kode_produksi'] ?>" class="btn btn-primary">Detail</a>
                                          <a onclick="return confirm('Apakah Anda Yakin?')"href="class-produksi/operasi-LP.php?action=delete&id=<?php echo $data['kode_produksi'] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
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