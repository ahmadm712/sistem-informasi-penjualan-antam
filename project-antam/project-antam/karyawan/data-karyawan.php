
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="container" style="background-color: #1067c9;">
                    <br>
                        <h1 class="h3 mb-2 text-800" style="color: white;">DATA KARYAWAN PT ANTAM</h1>
                        <a class="btn btn-light" href="?page=penambahan_karyawan" ><i class="fas fa-plus"></i>      Tambah Karyawan</a>
                            <?php 
                                if(@$_GET['page'] == 'penambahan_karyawan'){
                                    include "data-karyawan.php";
                                }
                            ?>
                        <br>
                        <br>
                    </div>
                    <br>

                    <?php
                    include "../class-user/user_karyawan.php";
                    $obj = new user_karyawan();
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
                                            <th>Id Karyawan</th>
                                            <th>Nama Karyawan</th>
                                            <th>Username</th>
                                            <th>Jabatan</th>
                                            <th>No Telepon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php 
                                      while($data = mysqli_fetch_assoc($result)) {
                                      ?>
                                          <td><?php echo $data['id_karyawan'] ?></td>
                                          <td><?php echo $data['nama_karyawan'] ?></td>
                                          <td><?php echo $data['username'] ?></td>
                                          <td><?php echo $data['jabatan'] ?></td>
                                          <td><?php echo $data['no_tlpn'] ?></td>
                                          <td><a onclick="return confirm('Apakah Anda Yakin?')"href="../class-user/operasi-karyawan.php?action=delete&id=<?php echo $data['id_karyawan'] ?>" class="btn btn-danger">Delete</a></td>
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