<?php
    include "../class-produk/perak.php";
    $obj = new perak();
    $result=$obj->showData();
?>



<div class="container mydiv">
    <div class="row"><a href="">
    <?php
    if (mysqli_num_rows($result) > 0)
    {
    while ($row =  mysqli_fetch_assoc($result)) {
    ?>
        <div class="col-md-3">
            <!-- bbb_deals -->
            <div class="bbb_deals">
                <div class="bbb_deals_slider_container">
                    <div class=" bbb_deals_item">
                        <div class="bbb_deals_image"><a href="detail-produk-perak.php?id=<?php echo $row["id_produk"]?>"><img src="../img/upload/<?php echo $row["gambar"]; ?>" alt=""> </a></div>
                        <div class="bbb_deals_content">
                            <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                <div class="bbb_deals_item_category"><a href="#"><?php echo $row["kategori"]; ?></a></div>
                            </div>
                            <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                <div class="bbb_deals_item_name"><a href="detail-produk-perak.php?id=<?php echo $row["id_produk"]?>"  style="text-decoration:none; color:#DAA520;" ><b><?php echo $row["nama_produk"]; ?></b></a></div>
                            </div>
                            <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                <div class="bbb_deals_item_price ">Rp. <?php echo number_format($row['harga_jual']) ?></div>
                            </div>
                            <div class="available">
                                <div class="available_line d-flex flex-row justify-content-start">
                                    <div class="available_title">Available: <span><?php echo $row["stock"]; ?> pcs</span></div>
                                </div>
                                <div class="available_bar"><span style="width:17%"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <p></p>
        </div>
        <?php
    }
    }
    ?>
    </div></a>
</div>