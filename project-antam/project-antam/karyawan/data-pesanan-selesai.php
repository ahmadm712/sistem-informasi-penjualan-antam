<?php
    include "../class-transaksi/faktur.php";
    $obj = new faktur();
    $result=$obj->showData3();

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
                                          <td style="width: 28%"><a href="faktur3.php?id=<?php echo $data['no_faktur']; $_SESSION['referensi'] = $norf;  ?>" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Detail</a>
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