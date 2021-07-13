<?php 

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['jabatan']=="Gudang"){

    }
    else{
		echo '<script language="javascript">alert("Akses hanya untuk Gudang"); document.location="index.php?page=data-emas";</script>';
    }
?>
    <div class="col-xl-10 col-lg-7">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Penambahan Produk Emas</h6>
            </div>
            <div class="container" id="isi" >
            <form method="post" action="../class-produk/operasi-emas.php?action=add" enctype="multipart/form-data">
                <br>
                <?php 
                    include "class-produksi/laporan-produksi.php";
                    $obj = new laporan();
                    $result=$obj->showData();
                ?>
                <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Kode Produksi</label>
                <div class="col-sm-10">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="kode">
                <?php 
                    while($data = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $data['kode_produksi'] ?>"> <?php echo $data['kode_produksi'] ?> || <?php echo $data['nama_produksi'] ?></option>
                <?php
                    }
                ?>
                </select>
                    
                </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Pilih Gambar</label><br>
                    <div class="col-sm-10">
                    <input type="file" name="gambar"/>
                    </div>
                </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNama" name="nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="stock" name="stock" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Kg" class="col-sm-2 col-form-label">Berat Kg</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="Kg" name="Kg" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_awal" class="col-sm-2 col-form-label">Harga Awal</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="harga_awal" name="harga_awal" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_jual" class="col-sm-2 col-form-label">Harga Jual</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="harga_jual" name="harga_jual" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100px;" name="submit">Submit</button>
            </form>
            <br><br>
            </div>
        </div>
    </div>

