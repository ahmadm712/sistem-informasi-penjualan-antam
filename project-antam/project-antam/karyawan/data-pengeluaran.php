
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="container" style="background-color: #1067c9;">
                    <br>
                        <h1 class="h3 mb-2 text-800" style="color: white;">DATA PENGELUARAN</h1>
                        <a class="btn btn-light" href="?page=penambahan_pengeluaran" ><i class="fas fa-plus"></i>      Tambah Pengeluaran</a>

                        <br>
                        <br>
                    </div>
                    <br>

                    <?php
                    include "../class-transaksi/pengeluaran.php";
                    include "../class-user/user_vendor.php";                  
                    $obj = new pengeluaran();
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
                                            <th style="width: 5%">Id</th>
                                            <th >Tanggal</th>
                                            <th >Pembelian</th>
                                            <th >Jumlah</th>
                                            <th style="width: 16%">Aksi</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php 
                                      while($data = mysqli_fetch_assoc($result)) {
                                      ?>
                                          <td style="width: 5%"><?php echo $data['id'] ?></td>
                                          <td style="width: 16%"><?php echo $data['tanggal'] ?></td>
                                          <td style="width: 30%"><?php echo $data['pembelian'] ?></td>
                                          <td style="width: 13%"><?php echo $data['jumlah'] ?></td>
                                          <td style="width: 30%"><a href="" class="btn btn-primary"  data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>">Detail</a>
                                          <a href="" class="btn btn-primary"  data-toggle="modal" data-target="#Ex<?php echo $data['id']; ?>">Update Vendor</a>
                                          <a onclick="return confirm('Apakah Anda Yakin?')"href="../class-transaksi/operasi-pengeluaran.php?action=delete&id=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                   
                                    <div class="modal fade" id="myModal<?php echo $data['id']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail Pengeluaran</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form method="post" action="../class-transaksi/operasi-pengeluaran.php?action=update">
                                                <?php
                                                    $id = $data['id']; 
                                                    $resultGet = $obj->getBy_id($id);
                                                    while ($row = mysqli_fetch_array($resultGet)) {  
                                                    ?>
                                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                                                    <div class="form-group row">
                                                        <label for="Pembelian" class="col-sm-4 col-form-label">Pembelian</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="Pembelian" name="Pembelian" value="<?php echo $row['pembelian']; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                                                        <div class="col-sm-8">
                                                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $row['tanggal']; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $row['jumlah']; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="jumlah" class="col-sm-4 col-form-label">Vendor</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" readonly class="form-control" id="jumlah" name="jumlah" value="<?php echo $row['nama']; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                                                        <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="harga" value="<?php echo $row['harga_total']; ?>" name="harga" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                                                        <div class="col-sm-8">
                                                        <textarea class="form-control" id="keterangan" name="keterangan" style="height: 80px;"> <?php echo $row['keterangan']; ?> </textarea>
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
                                    <div class="modal fade" id="Ex<?php echo $data['id']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Update Vendor</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form method="post" action="../class-transaksi/operasi-pengeluaran.php?action=updateVen">
                                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Vendor</label>
                                                        <div class="col-sm-10">
                                                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="vendor">
                                                        <?php 
                                                        
                                                        $venn = new vendor();
                                                        $hasil=$venn->showData();
                                                            while($ven = mysqli_fetch_array($hasil)) {
                                                            ?>
                                                        <option value="<?php echo $ven['id_vendor'] ?>"> <?php echo $ven['nama'] ?></option>
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
                                    </table>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

