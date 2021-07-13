<?php 

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['jabatan']=="Gudang"){

    }
    else{
		echo '<script language="javascript">alert("Akses hanya untuk bagian Gudang"); document.location="index.php?page=data-karyawan";</script>';
    }

    include "../class-user/user_vendor.php";
                    $obj = new vendor();
                    $result=$obj->showData();

?>
    <div class="col-xl-10 col-lg-7">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Penambahan Bahan Baku</h6>
            </div>
            <div class="container" id="isi" >
            <form method="post" action="class-produksi/operasi-BB.php?action=add">
                <br>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNama" name="nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="stock" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="stock" name="stock" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-10">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="satuan">
                <option selected>Choose...</option>
                <option value="Kg">Kg</option>
                <option value="Lt">Lt</option>
                <option value="Box">Box</option>
                </select>
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
            <button type="submit" class="btn btn-primary" style="width: 100px;" name="submit">Submit</button>
            </form>
            
            <br><br>
            </div>
        </div>
    </div>
