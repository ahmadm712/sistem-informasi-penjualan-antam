<div class="container">
    <center><br><h3 style="text-align: center; color : #DAA520;"><b>Berita dan Promo</b></h3>
        <p style="text-align: center;"> Semua informasi terkini, kegiatan, promo dan penawaran menarik lainnya dari ANTAM Logam Mulia.</p><br></center>
</div>

<?php 
include '../class-artikel/artikel.php';
$art = new artikel();
$result = $art->showData();
if (mysqli_num_rows($result) > 0)
{
while ($row =  mysqli_fetch_array($result)) {
 ?>
<div class="container" id="batas">
<div class="card mb-3" style="max-width: 1240px;" >
  <div class="row g-0">
    <div class="col-md-3">
  <a href="detail-artikel.php?id=<?php echo $row['id_artikel'] ?>" class="text-dark" style="text-decoration:none">
      <img style="width:110%" src="../img/upload/<?php echo $row['gambar'] ?>" alt="..."></a>
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <a href="detail-artikel.php?id=<?php echo $row['id_artikel'] ?>" class="text-dark" style="text-decoration:none">
        <h5 class="card-title"><?php echo $row['judul'] ?></h5>
        <p class="card-text"><small class="text-muted"><?php echo $row['tanggal'] ?></small></p>
        <p class="card-text"><?php 
            $kalimat = $row["isi"];
            $sub_kalimat = substr($kalimat,0,255);
            echo nl2br($sub_kalimat);
            ?>
        </p></a>
      </div>
    </div>
  </div>
</div>
<!-- END Media -->
</div>
<?php } }?>

<br><br><br><br>
