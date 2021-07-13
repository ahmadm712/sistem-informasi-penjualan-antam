
            <!-- Begin Page Content -->
            <div class="container-fluid">

                    <!-- Page Heading -->

                    <br>

                    <?php
                    include "../class-transaksi/pemesanan.php";
                    $obj = new pemesanan();
                    $result=$obj->showData();
                    ?>
                    <!-- DataTales Example -->
                <div class="row">
                    <div class="col-md-9">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 40%;" >Produk</th>
                                            <th style="width: 18%;">No Reference</th>
                                            <th style="width: 18%;">Harga</th>
                                            <th >Kuantitas</th>
                                            <th style="width: 18%;">PPN</th>
                                            <th style="width: 18%;">Subtotal</th>
                                            <th style="width: 6%;" >Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <?php 
                                    $total = 0;
                                    $ppn = 0;
                                    $a = 0;
                                    $b =0;
                                    $c =0;
                                    $subtot = 0;
                                      while($data = mysqli_fetch_assoc($result)) {
                                        $a = $data['harga_jual_pertama'];
                                        $b = $data['jumlah'];
                                        $c = $data['ppn'];
                                        $no = $data['reference_no'];
                                        $sub = $a * $b + $c;
                                          $ppn += $data['ppn'];
                                          $subtot += $sub;
                                          $obj->setNo_reference($no);
                                      ?>
                                          <td><?php echo $data['nama_produk'] ?></td>
                                          <td><?php echo $data['reference_no'] ?></td>
                                          <td><?php echo number_format($data['harga_jual']) ?></td>
                                          <td style="text-align: center;" ><?php echo $data['jumlah'] ?>  </td>
                                          <td><?php echo number_format($data['ppn']) ?></td>
                                          <td><?php echo number_format($sub) ?></td>
                                          <td style="text-align: center;" > <a href=""  data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>" ><i class="fas fa-edit"></i></a>
                                          <a  onclick="return confirm('Apakah Anda Yakin?')"href="../class-transaksi/operasi-pemesanan.php?action=delete&id=<?php echo $data['id'] ?>" ><i class="fas fa-trash-alt"></i></a></td>
                                    </tr>

                                    <div class="modal fade" id="myModal<?php echo $data['id']; ?>" role="dialog">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Kuantitas</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="modal-edit" class="modal-body">
                                                <form method="post" action="../class-transaksi/operasi-pemesanan.php?action=updateQty">
                                                <?php
                                                    $id = $data['id']; 
                                                    $resultGet = $obj->getBy_id($id);
                                                    while ($row = mysqli_fetch_array($resultGet)) {  
                                                    ?>
                                                    <input type="hidden" name="id" value="<?php echo $id ?>"/>
                                                    <div class="form-group row">
                                                        <label for="kd" class="col-sm-4 col-form-label">Kuantitas</label>
                                                        <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="qty" name="qty" value="<?php echo $row['jumlah']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary" >Update</a>
                                                    </div>
                                                    <?php 
                                                    }
                                                    ?> 
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                      <?php
                                          }
                                      ?>
                                    </table>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Ringkasan</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <form method="post" action="../class-transaksi/operasi-pembayaran.php?action=set">      
                                <?php $no = $obj->getNo_reference() ?>
                                <input type="hidden" name="noref" value="<?php echo $no; session_start(); $_SESSION['noref'] = $no;  ?>"/>
                                    <div class="form-group row">
                                        <label for="id" class="col-sm-4 col-form-label">PPN</label>
                                        <div class="col-sm-7">
                                        <input type="text" readonly class="form-control-plaintext" id="ppn" name="ppn" value="RP. <?php echo number_format($ppn)  ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="id" class="col-sm-4 col-form-label">Ongkir</label>
                                        <div class="col-sm-7">
                                        <input type="text" readonly class="form-control-plaintext" id="ongkir" name="ongkir" value="RP. 50.000">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id" class="col-sm-4 col-form-label">Subtotal</label>
                                        <div class="col-sm-7">
                                        <input type="text" readonly class="form-control-plaintext" id="Subtotal" name="Subtotal" value="RP. <?php echo number_format($subtot) ?>">
                                        </div>
                                    </div>

                                    <?php
                                    $totalsemua = $ppn + $subtot + 50000;
                                    ?>
                                    <div class="form-group row">
                                        <label for="id" class="col-sm-4 col-form-label"><b>TOTAL</b></label>
                                        <div class="col-sm-7">
                                        <input type="text" readonly class="form-control-plaintext" id="total" style="font-weight: bold;" name="total" value="RP. <?php echo number_format($totalsemua) ?>">
                                        </div>
                                        <?php $_SESSION['bayar'] = $totalsemua; ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="width: 250px;" > CHECKOUT</a>

                                <!-- <a href="" type="submit" class="btn btn-primary" style="width: 250px;"  >CHECKOUT</a> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.container-fluid -->

<script type="text/javascript">

    $("#jumlah").keyup(function() {

    });

</script>