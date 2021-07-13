
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="container" style="background-color: #1067c9;">
                    <br>
                        <h1 class="h3 mb-2 text-800" style="color: white;">DATA ARTIKEL</h1>
                        <a class="btn btn-light" href="?page=penambahan_artikel" ><i class="fas fa-plus"></i>      Tambah Artikel</a>
                        <br>
                        <br>
                    </div>
                    <br>

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
                                            <th style="width: 8%">Id</th>
                                            <th style="width: 22%">Tanggal</th>
                                            <th>Judul</th>
                                            <th style="width: 22%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 

                                        include "../class-artikel/artikel.php";
                                        $obj = new artikel();
                                        $result=$obj->showData();
                                    

                                    while ($data = mysqli_fetch_array($result)) { 
                                        
                                        $id = $data['id_artikel'] ?>
                                            <td><?php echo $id ?></td>
                                            <td><?php echo $data['tanggal'] ?></td>
                                            <td><?php echo $data['judul'] ?></td>
                                            <td> 
                                        <a href="update_artikel.php?id=<?php echo $id ?>" class="btn btn-primary" >Update</a>
                                            <a onclick="return confirm('Apakah Anda Yakin?')"href="../class-artikel/operasi-artikel.php?action=delete&id=<?php echo $data['id_artikel'] ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                            </tr>
                                        <div class="modal fade" id="myModal<?php echo $data['id_artikel']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail Artikel</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form>
                                                <?php
                                                    $id = $data['id_artikel']; 
                                                    $resultGet = $obj->getBy_id($id);
                                                    while ($row = mysqli_fetch_array($resultGet)) {  
                                                    ?>
                                                    <div class="form-group row">
                                                        <label for="id" class="col-sm-2 col-form-label">Judul</label>
                                                        <div class="col-sm-10">
                                                        <div class="container">
                                                        <input type="text" class="form-control" name="judul" value=" <?php echo $row['judul']; ?>">                        
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="stock" class="col-sm-2 col-form-label">Picture</label>
                                                        <div class="col-sm-10"><div class="container">
                                                        <img style="width: 250px; height :200px" src="../img/upload/<?php echo $row['gambar'] ?>" alt="">
                                                        </div></div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nama" class="col-sm-4 col-form-label">Text</label>
                                                        <div class="col-sm-7">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <textarea readonly name="isi" id="isi" cols="30" rows="10"> <?php echo $row['isi']; ?> </textarea>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->