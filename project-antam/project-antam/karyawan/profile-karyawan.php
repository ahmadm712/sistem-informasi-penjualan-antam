<?php
include '../class-user/user_karyawan.php';
$obj = new user_karyawan();
$result = $obj->showSection();
$data = mysqli_fetch_assoc($result)

?>

<div class="container">
<div class="card mb-3" style="max-width: 1040px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="../img/icon-karyawan.jpg" style="width: 100%;" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title" style="font-weight: bold;">Profil Karyawan</h4><br>

        <div class="row">
            <div class="col-md-3">
            <h5 class="card-title">Nama </h5>
            </div>
            <div class="col-md-8">
            <h5 class="card-title"> <?php echo $data['nama_karyawan']?></h5>
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
            <h5 class="card-title">Jabatan </h5>
            </div>
            <div class="col-md-8">
            <h5 class="card-title"> <?php echo  $data['jabatan'] ?></h5>
            </div>
        </div><br>
        <a href="" class="btn btn-primary"  data-toggle="modal" data-target="#EX<?php echo $data['id_karyawan']; ?>">Password Baru</a>
      </div>
    </div>
  </div>
</div><br><br><br><br>
</div>

                                    <div class="modal fade" id="EX<?php echo $data['id_karyawan']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Password Baru</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form method="post" action="../class-user/operasi-update.php?action=updatePass">
                                                <?php
                                                    $id2 = $data['id_karyawan']; 
                                                    $resultGet2 = $obj->getBy_id($id2);
                                                    while ($row2 = mysqli_fetch_array($resultGet2)) {  
                                                    ?>
                                                    <input type="hidden" readonly class="form-control-plaintext" id="id" name="id" value="<?php echo $row2['id_karyawan']; ?>">
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