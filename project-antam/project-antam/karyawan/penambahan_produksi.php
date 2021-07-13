
<!-- Content Row -->

<div class="row">
<!-- Pie Chart -->
<div class="col-xl-6 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Form Penambahan Produksi</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        <?php
            include "class-produksi/laporan-produksi.php";
            $obj = new laporan();

        ?>
        <form method="post" action="class-produksi/operasi-LP.php?action=add">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Kode Produksi</label>
                <div class="col-sm-7">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $_SESSION['kd_produksi']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Produksi</label>
                <div class="col-sm-8">
                <input type="text" class="form-control"  value="<?php echo $_SESSION['nama_produksi']; ?>">
                </div>
            </div>
        </form>
        </div>
    </div>
    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bahan Produksi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered " width="100%" cellspacing="0" >
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Id Bahan</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    
                                    require_once('../config/db.php');
                                    
                                    $koneksi = connect();
                                    $query = mysqli_query($koneksi, "SELECT * FROM bahan_produksi");
                                      
                                    while ($data = mysqli_fetch_array($query)) { 
                                        echo '<tr>
                                        <td>'.$data['id'].'</td>
                                        <td>'.$data['id_bahan'].'</td>
                                        <td>'.$data['jumlah'].'</td>
                                            <td><a href="edit.php?id='.$data['id'].'"><button type="submit" class="btn btn-primary" >Edit</button></a>
                                            <a href="#" onclick="confirmDeleteBarang('.$data['id'].')">
                                            <button type="submit" class="btn btn-primary">Delete</button></a>
                                            </td>
                                            </tr>';
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>

<!-- Data Bahan Baku -->
    <div class="col-xl-6 col-lg-7">
                    <?php
                        $resultBB=$obj->showBB();
                    ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Bahan Baku</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table table-bordered datatab" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Bahan</th>
                                            <th>Nama</th>
                                            <th>Stock</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                      <?php 
                                      while($dataBB = mysqli_fetch_assoc($resultBB)) {
                                      ?>
                                          <td style="width: 12%"><?php echo $dataBB['id_bahan'] ?></td>
                                          <td><?php echo $dataBB['nama_bahan'] ?></td>
                                          <td style="width: 12%"><?php echo $dataBB['stock'] ?></td>
                                          <td style="width: 18%"><a href="#" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dataBB['id_bahan']; ?>">Tambah</a>
                                          </td>
                                    </tr>

                                    <div class="modal fade" id="myModal<?php echo $dataBB['id_bahan']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail Bahan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form>
                                                <?php
                                                    $id = $dataBB['id_bahan']; 
                                                    // $resultGet = $objk->getBy_id($id);
                                                    $query_edit = mysqli_query($koneksi, "SELECT * FROM bahan_baku WHERE id_bahan='$id'");
                                                    while ($row = mysqli_fetch_array($query_edit)) {  
                                                    ?>
                                                    <div class="form-group row">
                                                        <label for="id" class="col-sm-4 col-form-label">Id Bahan</label>
                                                        <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext" id="id" name="id" value="<?php echo $row['id_bahan']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama" class="col-sm-4 col-form-label">Nama Bahan</label>
                                                        <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext" id="nama" name="nama" value="<?php echo $row['nama_bahan']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="stock" class="col-sm-4 col-form-label">Stock</label>
                                                        <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext" id="stock" value="<?php echo $row['stock']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="satuan" class="col-sm-4 col-form-label">Satuan</label>
                                                        <div class="col-sm-7">
                                                        <input type="text" readonly class="form-control-plaintext" id="satuan" value="<?php echo $row['satuan']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama" class="col-sm-4 col-form-label">Jumlah</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <?php 
                                                    }
                                                    ?> 
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                            <a class="btn btn-primary" href="../login-register/logout-karyawan.php">Tambah</a>
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
</div>


<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.datatab').DataTable();
  } );
  </script>