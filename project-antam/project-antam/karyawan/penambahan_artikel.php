<?php 

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['jabatan']=="Admin"){

    }
    else{
		echo '<script language="javascript">alert("Akses hanya untuk Admin"); document.location="index.php?page=data-artikel";</script>';
    }
?>

<!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Penambahan Artikel</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <form method="post" action="../class-artikel/operasi-artikel.php?action=add" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <h6 name="date" align="right"> <?php echo date("l, d-M-Y"); ?></h6>
                                        <label for="judul"><b>Judul Artikel</b></label>
                                        <input type="text" id="judul" name="judul" class="form-control" placeholder="Masukan judul" ><br>
                                        <label for="gambar"><b>Pilih Gambar</b></label><br>
                                        <input type="file" name="gambar"/>
                                        <br><br>
                                        <label for="artikel"><b>Text Artikel</b></label>
                                        <textarea class="form-control" name="isi" id="artikel" rows="7" placeholder="Masukan Text Artikel "></textarea>
                                        <br>
                                    </div>
                                    <br>
                                    <button type="Submit" class="btn btn-primary" name="input_artikel" > Kirim Artikel</button><br><br>
                                    </div></div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>