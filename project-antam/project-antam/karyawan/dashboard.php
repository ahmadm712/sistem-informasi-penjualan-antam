<?php
    include "../class-transaksi/faktur.php";
    $obj = new faktur();
    $result=$obj->showData();
    $result2=$obj->showData2();

    include "../class-produk/produk.php";
    $obj0 = new produk();
    $result0=$obj0->show0();

    include "class-produksi/bahan-baku.php";
    $obj1 = new bahan_baku();
    $result1=$obj1->show0();

    include "../class-transaksi/pemesanan.php";
    $obj2 = new pemesanan();

?>
               <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
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
                                          <td style="width: 28%"><a href="faktur.php?id=<?php echo $data['no_faktur']; $_SESSION['referensi'] = $norf;  ?>" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Detail</a>
                                             <a onclick="return confirm('Apakah Produk siap untuk dikirim?')" href="../class-transaksi/operasi-pemesanan.php?action=dikirim&id=<?php  echo $data['nomor_reference']; ?>"  class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" >Pesanan Dikirim</a>
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

                <!-- Data pesanan dikirim -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pesanan Proses Pengiriman</h6>
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
                                      
                                      while($data4 = mysqli_fetch_assoc($result2)) {
                                        $no++;
                                        $norf = $data4['no_faktur'];
                                      ?>
                                          <td style="width: 12%"><?php echo $no; ?></td>
                                          <td><?php echo $data4['tanggal'] ?></td>
                                          <td ><?php echo $data4['nomor_payment'] ?></td>
                                          <td ><?php echo $data4['nomor_reference'] ?></td>
                                          <td style="width: 28%"><a href="faktur2.php?id=<?php echo $data4['no_faktur']; $_SESSION['referensi'] = $norf;  ?>" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Detail</a>
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


            <div class="row">
                <div class="col-md-6">
                    <!-- Data Stock kosong -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Stock produk kosong</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Stock</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php 
                                      while($data2 = mysqli_fetch_assoc($result0)) {
                                      ?>
                                          <td style="width: 12%"><?php echo $data2['id_produk'] ?></td>
                                          <td><?php echo $data2['nama_produk'] ?></td>
                                          <td style="width: 12%"><?php echo $data2['stock'] ?></td>
                                          <td style="width: 18%">
                                          <a <?php if($data2['kategori'] == 'Emas'){ ?>
                                            href="?page=data-emas"
                                          <?php } else { ?>
                                            href="?page=data-perak"
                                          <?php }?>class="btn btn-danger">Tindak</a></td>
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
                
                <div class="col-md-6">
                    <!-- Data Stock kosong -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Stock Bahan Baku Kosong</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Stock</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <?php 
                                      while($data3 = mysqli_fetch_assoc($result1)) {
                                      ?>
                                          <td style="width: 12%"><?php echo $data3['id_bahan'] ?></td>
                                          <td><?php echo $data3['nama_bahan'] ?></td>
                                          <td style="width: 12%"><?php echo $data3['stock'] ?></td>
                                          <td style="width: 18%">
                                          <a href="?page=data-BB" class="btn btn-danger">Tindak</a></td>
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
            </div>

                   


                    








                </div>
                <!-- /.container-fluid -->




