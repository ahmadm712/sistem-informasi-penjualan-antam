
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="container" style="background-color: #1067c9;">
                    <br>
                        <h1 class="h3 mb-2 text-800" style="color: white;">DATA BAHAN BAKU</h1>
                        <a class="btn btn-light" href="?page=penambahan_BB" ><i class="fas fa-plus"></i>      Tambah Bahan Baku</a>
                            <?php 
                                if(@$_GET['page'] == 'penambahan_BB'){
                                    include "data-karyawan.php";
                                }
                            ?>
                        <br>
                        <br>
                    </div>
                    <br>

                    <?php
                    include "class-produksi/bahan-baku.php";
                    $obj = new bahan_baku();
                    $result=$obj->showData();

                    include "../class-user/user_vendor.php";                  

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
                                            <th>Id Bahan</th>
                                            <th>Nama</th>
                                            <th>Stock</th>
                                            <th>Satuan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php 
                                      while($data = mysqli_fetch_assoc($result)) {
                                      ?>
                                          <td style="width: 12%"><?php echo $data['id_bahan'] ?></td>
                                          <td><?php echo $data['nama_bahan'] ?></td>
                                          <td style="width: 12%"><?php echo $data['stock'] ?></td>
                                          <td style="width: 12%"><?php echo $data['satuan'] ?></td>
                                          <td style="width: 32%"><a href="" class="btn btn-primary"  data-toggle="modal" data-target="#myModal<?php echo $data['id_bahan']; ?>">Detail</a>
                                          <a href="" class="btn btn-primary"  data-toggle="modal" data-target="#Ex<?php echo $data['id_bahan']; ?>">Update Vendor</a>
                                          <a onclick="return confirm('Apakah Anda Yakin?')"href="class-produksi/operasi-BB.php?action=delete&id=<?php echo $data['id_bahan'] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>

                                    <div class="modal fade" id="myModal<?php echo $data['id_bahan']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail Bahan Baku</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form method="post" action="class-produksi/operasi-BB.php?action=update">
                                                <?php
                                                    $id = $data['id_bahan']; 
                                                    $resultGet = $obj->getBy_id($id);
                                                    while ($row = mysqli_fetch_array($resultGet)) {  
                                                    ?>
                                                    <input type="hidden" name="id_bahan" value="<?php echo $data['id_bahan']; ?>"/>
                                                    <div class="form-group row">
                                                        <label for="inputnama" class="col-sm-4 col-form-label">Nama Bahan</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="inputNama" name="nama" value="<?php echo $row['nama_bahan']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="stock" class="col-sm-4 col-form-label">Stock</label>
                                                        <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="inputNo_tlpn" name="stock" value="<?php echo $row['stock']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="satuan" class="col-sm-4 col-form-label">Satuan</label>
                                                        <div class="col-sm-8">
                                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="satuan" >
                                                        <option value ="Kg" <?php if($row['satuan']=="Kg"){echo "selected";} ?> >Kg</option>
                                                        <option value ="Lt" <?php if($row['satuan']=="Lt"){echo "selected";} ?> >Lt</option>
                                                        <option value ="Box" <?php if($row['satuan']=="Box"){echo "selected";} ?> >Box</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="vendor" class="col-sm-4 col-form-label">Vendor</label>
                                                        <div class="col-sm-8">
                                                        <input readonly type="text" class="form-control" id="vendor" name="vendor" value="<?php echo $row['nama']; ?>" >
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
                                    <div class="modal fade" id="Ex<?php echo $data['id_bahan']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Update Vendor</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form method="post" action="class-produksi/operasi-BB.php?action=updateVen">
                                                    <input type="hidden" name="id_bahan" value="<?php echo $data['id_bahan']; ?>"/>
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

                <!-- Button trigger modal -->


                <!-- /.container-fluid -->