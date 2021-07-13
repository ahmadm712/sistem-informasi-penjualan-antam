<br>
<center>
<div class="btn-group shadow-0" role="group" aria-label="Basic example">
  <button type="submit" class="btn btn-outline-secondary " onclick="window.location.href='?page=menunggu-konfirmasi';" data-mdb-color="dark">
    Menunggu Konfirmasi
  </button>
  <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='?page=daftar-pembayaran';" data-mdb-color="dark">
    Cetak Faktur
  </button>
  <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='?page=diproses';" data-mdb-color="dark">
    Diproses
  </button>
  <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='?page=dikirim';"  data-mdb-color="dark">
    Dikirim
  </button>
  <button type="button" class="btn btn-outline-secondary active" onclick="window.location.href='?page=selesai';"  data-mdb-color="dark">
    Selesai
  </button>
</div>
</center> <br>


<?php
    include "../class-transaksi/pemesanan.php";
    $obj = new pemesanan();
    $result=$obj->showSelesai();

?>
<div class="container">

<div><center>
<img src="../img/antam-logo.png" alt="" ><p></p>
<h3 style="color:#DAA520; font-weight: bold;">TERIMA KASIH SUDAH BELANJA DI LOGAM MULIA</h3>
<br><br></center>
</div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pesanan Selesai</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama Produk</th>
                                            <th>PPN</th>
                                            <th>Harga</th>
                                            <th>Kuantitas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php 
                                      $no = 0;
                                      
                                      while($data = mysqli_fetch_assoc($result)) {
                                        $no++;
                                      ?>
                                          <td style="width: 5%"><?php echo $no; ?></td>
                                          <td><?php echo $data['tanggal'] ?></td>
                                          <td><?php echo $data['nama_produk'] ?></td>
                                          <td>Rp. <?php echo number_format($data['ppn']) ?></td>
                                          <td>Rp. <?php echo number_format($data['harga_jual_pertama']) ?></td>
                                          <td style="width: 12%"><?php echo $data['jumlah'] ?></td>
                                          </td>
                                    </tr>
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

                <br><br><br><br><br>

</div>