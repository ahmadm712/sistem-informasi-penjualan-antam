
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="container" style="background-color: #1067c9;">
                    <br>
                        <h1 class="h3 mb-2 text-800" style="color: white;">DATA STOCK EMAS</h1>
                        <a class="btn btn-light" href="?page=tambah-emas" ><i class="fas fa-plus"></i>      Tambah produk</a>
                        <br>
                        <br>
                    </div>
                    <br>

<?php
    include "../class-produk/emas.php";
    $obj = new emas();
    $result=$obj->showData();
    include "../karyawan/class-produksi/laporan-produksi.php";

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
                                            <th>Id Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Stock</th>
                                            
                                            <th>Harga Jual</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php 
                                      while($data = mysqli_fetch_assoc($result)) {
                                      ?>
                                          <td style="width: 12%"><?php echo $data['id_produk'] ?></td>
                                          <td><?php echo $data['nama_produk'] ?></td>
                                          <td style="width: 12%"><?php echo $data['stock'] ?></td>
                                          <td style="width: 14%"><?php echo number_format($data['harga_jual']) ?></td>
                                          <td style="width: 32%"><a href="" class="btn btn-primary"  data-toggle="modal" data-target="#myModal<?php echo $data['id_produk']; ?>">Detail</a>
                                          <a href="" class="btn btn-primary"  data-toggle="modal" data-target="#Ex<?php echo $data['id_produk']; ?>">Kode Produksi</a>
                                          <a onclick="return confirm('Apakah Anda Yakin?')"href="../class-produk/operasi-emas.php?action=delete&id=<?php echo $data['id_produk'] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>

                                    <div class="modal fade" id="myModal<?php echo $data['id_produk']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail Emas</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form method="post" action="../class-produk/operasi-emas.php?action=update">
                                                <?php
                                                    $id = $data['id_produk']; 
                                                    $resultGet = $obj->getBy_id($id);
                                                    while ($row = mysqli_fetch_array($resultGet)) {  
                                                    ?>
                                                    <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>"/>
                                                    <div class="form-group row">
                                                        <label for="kd" class="col-sm-4 col-form-label">Kode Produksi</label>
                                                        <div class="col-sm-8">
                                                        <input readonly type="text" class="form-control" id="kd" name="kd" value="<?php echo $row['kode_produksi']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputnama" class="col-sm-4 col-form-label">Nama Produk</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="inputNama" name="nama" value="<?php echo $row['nama_produk']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="stock" class="col-sm-4 col-form-label">Stock</label>
                                                        <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="inputNo_tlpn" name="stock" value="<?php echo $row['stock']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="kg" class="col-sm-4 col-form-label">Berat Kg</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="kg" name="kg" value="<?php echo $row['berat_kg']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="harga_awal" class="col-sm-4 col-form-label">Harga Awal</label>
                                                        <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="harga_awal" name="harga_awal" value="<?php echo $row['harga_awal']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="harga_jual" class="col-sm-4 col-form-label">Harga Jual</label>
                                                        <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="<?php echo $row['harga_jual']; ?>" >
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
                                    
                                    <!-- Modal Vendor -->
                                    <div class="modal fade" id="Ex<?php echo $data['id_produk']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Update Kode Produksi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            
                                            <div id="modal-edit" class="modal-body">
                                                    <form method="post" action="../class-produk/operasi-emas.php?action=updateKode">
                                                    <div class="form-group row">
                                                    <label for="kd" class="col-sm-4 col-form-label">Kode Lama</label>
                                                    <div class="col-sm-8">
                                                        <input readonly type="text" class="form-control" id="kd" name="kd" value="<?php echo $data['kode_produksi']; ?>" >
                                                    </div>
                                                    </div>
                                                    <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>"/>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-4 col-form-label">Kode Baru</label>
                                                        <div class="col-sm-8">
                                                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="kode">
                                                        <?php 
                                                        
                                                        $lap = new laporan();
                                                        $hasil=$lap->showData();
                                                            while($ven = mysqli_fetch_array($hasil)) {
                                                            ?>
                                                        <option value="<?php echo $ven['kode_produksi'] ?>"> <?php echo $ven['kode_produksi'] ?> || <?php echo $ven['nama_produksi'] ?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                        </select>
                                                    </div><p> <br> </p>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary" >Update</a>
                                                    </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                      }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->