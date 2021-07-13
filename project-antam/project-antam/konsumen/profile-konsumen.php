<?php
include '../class-user/user_konsumen.php';
$obj = new user_konsumen();
$result = $obj->showSection();
$data = mysqli_fetch_assoc($result)

?>

<div class="container">
<div class="card mb-3" style="max-width: 1040px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="../img/icon-customer.jpg" style="width: 110%;" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title" style="font-weight: bold;">Profil Konsumen</h4><br>

        <div class="row">
            <div class="col-md-3">
            <h5 class="card-title">Nama </h5>
            </div>
            <div class="col-md-8">
            <h5 class="card-title"> <?php echo $data['nama_konsumen']?></h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
            <h5 class="card-title">No Telephone </h5>
            </div>
            <div class="col-md-8">
            <h5 class="card-title"> <?php echo  $data['no_tlpn'] ?></h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
            <h5 class="card-title">No KTP </h5>
            </div>
            <div class="col-md-8">
            <h5 class="card-title"> <?php echo  $data['no_ktp'] ?></h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
            <h5 class="card-title">No NPWP </h5>
            </div>
            <div class="col-md-8">
            <h5 class="card-title"> <?php echo  $data['no_npwp'] ?></h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
            <h5 class="card-title">Alamat </h5>
            </div>
            <div class="col-md-9">
            <h5><?php echo $data['rincian'] ?>, Desa <?php echo $data['desa/nama_jl'] ?>, Kec. <?php echo $data['kecamatan'] ?>, Kab/Kota. <?php echo $data['kab/kota'] ?>, Provinsi <?php echo $data['provinsi'] ?> </h5>
            </div>
        </div>
        <br>
        <a href="" class="btn btn-primary"  data-toggle="modal" data-target="#myModal<?php echo $data['id_konsumen']; ?>">Edit Profile</a>
        <a href="" class="btn btn-primary"  data-toggle="modal" data-target="#EX<?php echo $data['id_konsumen']; ?>">Password Baru</a>
      </div>
    </div>
  </div>
</div><br><br><br><br>
</div>

                                    <div class="modal fade" id="myModal<?php echo $data['id_konsumen']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Profile</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form method="post" action="../class-user/operasi-konsumen.php?action=update1">
                                                <?php
                                                    $id = $data['id_konsumen']; 
                                                    $resultGet = $obj->getBy_id($id);
                                                    while ($row = mysqli_fetch_array($resultGet)) {  
                                                    ?>
                                                        <input type="hidden" readonly class="form-control-plaintext" id="id" name="id_konsumen" value="<?php echo $row['id_konsumen']; ?>">
                                                    <div class="form-group row">
                                                        <label for="inputnama" class="col-sm-4 col-form-label">Nama</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="inputNama" name="nama" value="<?php echo $row['nama_konsumen']; ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputnama" class="col-sm-4 col-form-label">No Telephone</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="no_tlpn" name="no_tlpn" value="<?php echo $row['no_tlpn']; ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputnama" class="col-sm-4 col-form-label">No KTP</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?php echo $row['no_ktp']; ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputnama" class="col-sm-4 col-form-label">No NPWP</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="no_npwp" name="no_npwp" value="<?php echo $row['no_npwp']; ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputnama" class="col-sm-4 col-form-label">Provinsi</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?php echo $row['provinsi']; ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputnama" class="col-sm-4 col-form-label">Kab/Kota</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="kab/kota" name="kab/kota" value="<?php echo $row['kab/kota']; ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputnama" class="col-sm-4 col-form-label">Kecamatan</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?php echo $row['kecamatan']; ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputnama" class="col-sm-4 col-form-label">Desa/Nama Jl</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="desa/nama_jl" name="desa/nama_jl" value="<?php echo $row['desa/nama_jl']; ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputnama" class="col-sm-4 col-form-label">Keterangan</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="rincian" name="rincian" value="<?php echo $row['rincian']; ?>" >
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



                                        <div class="modal fade" id="EX<?php echo $data['id_konsumen']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Password Baru</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form method="post" action="../class-user/operasi-konsumen.php?action=updatePass">
                                                <?php
                                                    $id2 = $data['id_konsumen']; 
                                                    $resultGet2 = $obj->getBy_id($id2);
                                                    while ($row2 = mysqli_fetch_array($resultGet2)) {  
                                                    ?>
                                                    <input type="hidden" readonly class="form-control-plaintext" id="id" name="id" value="<?php echo $row2['id_konsumen']; ?>">
                                                    <div class="form-group row">
                                                        <label for="username" class="col-sm-4 col-form-label">Username</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" readonly class="form-control" id="username" name="username" value="<?php echo $row2['username']; ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="password" class="col-sm-4 col-form-label">New Password</label>
                                                        <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="password" name="password" value="" placeholder="Masukan password baru" >
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