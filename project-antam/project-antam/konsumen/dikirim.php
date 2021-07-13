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
  <button type="button" class="btn btn-outline-secondary active" onclick="window.location.href='?page=dikirim';"  data-mdb-color="dark">
    Dikirim
  </button>
  <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='?page=selesai';"  data-mdb-color="dark">
    Selesai
  </button>
</div>
</center> <br>


<?php
    include "../class-transaksi/pemesanan.php";
    $obj = new pemesanan();
    $result=$obj->showDikirim();

?>
<div class="container">
<div><center>
<img src="../img/icon-delivery.jpg" alt="" ><p></p>
<h5 style="color: black; font-weight: bold;">Tenang duduk manis dirumah, pesanan kamu sedang kami antar.</h5>
<h5 style="color: black; font-weight: bold;">Jika pesanan sudah sampai, jangan lupa konfirmasi pesanan sudah diterima yaa.</h5>
<br><br></center>
</div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama Produk</th>
                                            <th>PPH</th>
                                            <th>Harga</th>
                                            <th>Kuantitas</th>
                                            <th>Aksi</th>
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
                                          <td style="width: 12%"><a href="../class-transaksi/operasi-pemesanan.php?action=selesai&id=<?php  echo $data['id']; ?>&no=<?php  echo $data['reference_no']; ?>" class="btn btn-primary" >Pesanan Diterima</a>
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