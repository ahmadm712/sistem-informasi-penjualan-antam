<?php
include "../class-user/template/template.php";
if($_SESSION['jabatan']=="Gudang"){

}
else{
    echo '<script language="javascript">alert("Akses hanya untuk Gudang"); document.location="index.php?page=data-artikel";</script>';
}

include '../class-produk/produk.php';
$obj = new produk();
$data = $obj->getPerak1gr();

?>

<div class="col-xl-10 col-lg-7">
        <div class="card shadow mb-4">
            <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Form Update Harga Perak Gram Harian</h6>
            </div>
            <div class="container" id="isi" >
            <form method="post" action="../class-produk/operasi-produk.php?action=update">
            <br>
            <div class="form-group row">
            <input type="hidden" name="id_produk" value="<?php echo $data['id_produk'] ?>">
                <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input readonly type="text" class="form-control" id="inputNama" name="nama" required value="<?php echo $data['nama_produk'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNotlpn" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="harga" name="harga" required value="<?php echo $data['harga_jual'] ?>" >
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100px;" name="submit" id="iconText">Update</button>
            </form>
            
            <br><br>
            </div>
        </div>
    </div>

	</script>