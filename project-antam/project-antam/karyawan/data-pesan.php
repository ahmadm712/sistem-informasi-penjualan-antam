
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                    $result=$obj->showAllData();

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
                                            <th>No</th>
                                            <th>Nama Konsumen</th>
                                            <th>Kontak</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php 
                                      $no =0;
                                      while($data = mysqli_fetch_assoc($result)) {
                                          $no++;
                                      ?>
                                          <td><?php echo $no; ?></td>
                                          <td><?php echo $data['nama'] ?></td>
                                          <td><?php echo $data['tlpn'] ?></td>
                                          <td><?php echo $data['email'] ?></td>
                                          <td><a href="../class-contactus/operasi.php?action=getid&id=<?php echo $data['id']?>" class="btn btn-primary">Detail</a></td>
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