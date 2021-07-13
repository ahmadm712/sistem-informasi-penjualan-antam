<?php 
    include "../class-user/user_vendor.php";
                    $obj = new vendor();
                    $result=$obj->showData();

?>

<div class="col-xl-10 col-lg-7">
        <div class="card shadow mb-4">
            <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Form Penambahan Pengeluaran</h6>
            </div>
            <div class="container" id="isi" >
            <form method="post" action="../class-transaksi/operasi-pengeluaran.php?action=add">
            <br>
            <div class="form-group row">
                <label for="Pembelian" class="col-sm-2 col-form-label">Pembelian</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="Pembelian" name="Pembelian" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="harga" name="harga" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Vendor</label>
                <div class="col-sm-10">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="id_vendor">
                <?php 
                    while($data = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $data['id_vendor'] ?>"> <?php echo $data['nama'] ?></option>
                <?php
                    }
                ?>
                </select>
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="keterangan" name="keterangan" style="height: 80px;"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100px;" name="submit" id="iconText">Submit</button>
            </form>
            
            <br><br>
            </div>
        </div>
    </div>

