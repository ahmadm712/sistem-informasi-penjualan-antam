<br>
<center>
<div class="btn-group shadow-0" role="group" aria-label="Basic example">
  <button type="submit" class="btn btn-outline-secondary" onclick="window.location.href='?page=menunggu-konfirmasi';" data-mdb-color="dark">
    Menunggu Konfirmasi
  </button>
  <button type="button" class="btn btn-outline-secondary active" onclick="window.location.href='?page=daftar-pembayaran';" data-mdb-color="dark">
    Cetak Faktur
  </button>
  <button type="button" class="btn btn-outline-secondary " onclick="window.location.href='?page=diproses';" data-mdb-color="dark">
    Diproses
  </button>
  <button type="button" class="btn btn-outline-secondary"  onclick="window.location.href='?page=dikirim';" data-mdb-color="dark">
    Dikirim
  </button>
  <button type="button" class="btn btn-outline-secondary"  onclick="window.location.href='?page=selesai';" data-mdb-color="dark">
    Selesai
  </button>
</div>
</center> <br>


<?php
    include "../class-transaksi/pemesanan.php";
    $obj = new pemesanan();
    $result=$obj->showFaktur();

?>
<div class="container">
<div class="container">
<div><center>
<img src="../img/icon-invoice.jpg" alt="" style="width: 25%;"><p></p>
<h5 style="color: black; font-weight: bold;">Cetak Bukti pemesanan mu.</h5>
<br><br></center>
</div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-6">
                            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
                            </div>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>No Payment</th>
                                            <th>No Reference</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php 
                                      $no = 0;
                                      
                                      while($data = mysqli_fetch_assoc($result)) {
                                        $no++;
                                        $norf = $data['no_faktur'];
                                      ?>
                                          <td style="width: 12%"><?php echo $no; ?></td>
                                          <td><?php echo $data['tanggal'] ?></td>
                                          <td ><?php echo $data['nomor_payment'] ?></td>
                                          <td ><?php echo $data['nomor_reference'] ?></td>
                                          <td style="width: 12%"><a href="faktur.php?id=<?php echo $data['no_faktur']; $_SESSION['referensi'] = $norf;  ?>" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Cetak Faktur</a>
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
<br><br><br><br><br><br>

</div>