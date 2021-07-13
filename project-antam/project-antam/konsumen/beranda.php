<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
  <div class="carousel-item active" data-bs-interval="2000">
      <img src="../img/crsl-1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 style="font-weight: bold; color: #DAA520;">SAVE YOUR TIME, BUY ONLINE.</h2><P></P>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="10000">
      <img src="../img/bg6.png" class="d-block w-100" alt="...">
      <div class="carousel-caption">
      <section class="pb-4">

</section>
      </div>
    </div>

    <div class="carousel-item">
      <img src="../img/bg5.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3 style="font-weight: bold;">INVESTASI SEKARANG</h3>
        <p></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
</div>

<?php
include '../class-produk/produk.php';
$obj = new produk();
$data = $obj->getEmas1gr();
$data2 = $obj->getPerak1gr();

?>

    <p><br></p>
    <div class="container" >
        <div class="row">
            <!-- Harga Emas  -->
            <div class="col-xl-2 col-md-6 mb-4">
            </div>
            <!-- Stock Emas  -->
            <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-m font-weight-bold text-warning text-uppercase mb-1">
                                            HARGA EMAS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Harga/gram RP. <?php echo number_format($data['harga_jual']) ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <!-- Harga Perak -->
            <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-m font-weight-bold text-secondary text-uppercase mb-1">
                                                HARGA Perak</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Harga/gram RP. <?php echo number_format($data2['harga_jual']) ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>

            <!-- Harga Perak -->
            <div class="col-xl-2 col-md-6 mb-4">
            </div>

        <?php
          include '../class-artikel/artikel.php';
          $obj3 = new artikel();
          $data3 = $obj3->getBerita1();
          $data4 = $obj3->getBerita2();
          $data5 = $obj3->getBerita3();

        ?>
        <!-- Berita -->
        <div class="row">
        <h3 style="text-align: center; color : #DAA520;"><b>Berita dan Promo</b></h3><br>
        <p style="text-align: center;"> Semua informasi terkini, kegiatan, promo dan penawaran menarik lainnya dari ANTAM Logam Mulia.</p>
            <div class="col-xl-4 col-md-8 mb-6">
            <a href="detail-artikel.php?id=<?php echo $data3['id_artikel'] ?>" class="text-dark" style="text-decoration:none">
            <div class="card" style="width: 20rem; height: auto;">
            <img src="../img/upload/<?php echo $data3['gambar'] ?>" class="card-img-top" alt="..." style="width: 20rem; height :15rem;">
            <div class="card-body">
                <h6 class="card-title"style='color : #DAA520; text-align: center;' > <b> <?php echo $data3['judul']; ?></b></h6>
            </div>
            </div></a>
            </div>

            <div class="col-xl-4 col-md-8 mb-6">
            <a href="detail-artikel.php?id=<?php echo $data4['id_artikel'] ?>" class="text-dark" style="text-decoration:none">
            <div class="card" style="width: 20rem; height: auto;">
            <img src="../img/upload/<?php echo $data4['gambar'] ?>" class="card-img-top" alt="..." style="width: 20rem; height :15rem;">
            <div class="card-body">
                <h6 class="card-title"style='color : #DAA520; text-align: center;' > <b> <?php echo $data4['judul']; ?></b></h6>
            </div>
            </div></a>
            </div>

            <div class="col-xl-4 col-md-8 mb-6">
            <a href="detail-artikel.php?id=<?php echo $data5['id_artikel'] ?>" class="text-dark" style="text-decoration:none">
            <div class="card" style="width: 20rem; height: auto;">
            <img src="../img/upload/<?php echo $data5['gambar'] ?>" class="card-img-top" alt="..." style="width: 20rem; height :15rem;">
            <div class="card-body">
                <h6 class="card-title"style='color : #DAA520; text-align: center;' > <b> <?php echo $data5['judul']; ?></b></h6><br>
            </div>
            </div></a>
            </div>


            <p></p>
            <p style="text-align: center;"> <a href="?page=list-artikel" style="text-align: center; width:160px;" class="btn btn-primary"> Lihat Berita Lainnya</a> </p>
        </div>
        <p><br><br></p>

        <!-- Alasan -->
        <div class="row">
        <h3 style="text-align: center; color : #DAA520;"><b>Kenapa Beli Emas di Logam Mulia?</b></h3>
        <p style="text-align: center;">Untuk jaminan keaslian dan kemurnian emas batangan ANTAM LM, silakan melakukan pembelian melalui logammulia.com atau datang langsung ke Butik Emas Logam Mulia. Investasi emas batangan ANTAM LM kini semakin mudah dengan layanan pengiriman ke alamat konsumen.</p>
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card" style="width: 15rem; height: 18.5rem;">
        <div class="card-body">
            <h5 class="card-title"style='color : #DAA520'; > <b>Akreditasi LBMA </b></h5>
            <p class="card-text">Sertifikat Responsible Gold dari LBMA memastikan Logam Mulia mendapatkan bahan dari sumber yang terbebas dari penambangan ilegal, pencucian uang, terorisme, pelanggaran hak asasi manusia  dan perdagangan manusia.</p>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card" style="width: 15rem; height: 18.5rem; ">
        <div class="card-body">
            <h5 class="card-title"style='color : #DAA520'; ><b>Emas 99.99%</b></h5>
            <p class="card-text">Emas batangan ANTAM LM memberikan jaminan keaslian produk dan kemurnian 99,99%.</p>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card" style="width: 15rem; height: 18.5rem;">
        <div class="card-body">
            <h5 class="card-title"style='color : #DAA520'; > <b> Layanan BRANKAS</b></h5>
            <p class="card-text">Simpan emas di Brankas LM. Cara cerdas berinvestasi emas tanpa risiko hilang, dengan harga beli emas yang lebih murah.</p>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card" style="width: 15rem; height: 18.5rem;">
        <div class="card-body">
            <h5 class="card-title"style='color : #DAA520'; ><b>Transaksi Aman</b></h5>
            <p class="card-text">Keamanan website dilengkapi dengan enkripsi SSL Certificate. Pembayaran menggunakan virtual account  bank untuk mempermudah konsumen tanpa perlu konfirmasi.</p>
        </div>
        </div>
        </div>
        </div>
    </div>