<div class="container-fluid">
<div class="col-xl-10 col-lg-7">
    <div class="card shadow mb-4">
            <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Pesan Konsumen</h6>
            </div>
            <div class="container" id="isi" >
            <form method="post" action="../class-contactus/operasi.php?action=update">
            <br>
            <div class="form-group row">
            <input type="hidden" class="form-control" id="inputNama" name="id" value="<?php echo $_SESSION['id'] ?>" required>
                <label for="inputnama" class="col-sm-3 col-form-label">Nama Konsumen</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control" id="inputNama" name="nama" value="<?php echo $_SESSION['na'] ?>" required>
                </div>
            </div> 
            <div class="form-group row">
                <label for="inputNotlpn" class="col-sm-3 col-form-label">Kontak</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control" id="inputNo_tlpn" value="<?php echo $_SESSION['tl'] ?>" name="kontak" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNotlpn" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                <input type="text" readonly class="form-control" id="inputNo_tlpn" value="<?php echo $_SESSION['em'] ?>" name="email" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputUsername" class="col-sm-3 col-form-label">Pesan</label>
                <div class="col-sm-9">
                <textarea readonly class="form-control" id="inputUsername" name="pesan" required style="height: 80px;"><?php echo $_SESSION['pe'] ?></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary"  name="submit" id="iconText">Sudah ditanggapi</button>
            </form>
            
            <br><br>
            </div>
        </div>
    </div>
</div>

