<?php
include "../class-user/template/template.php";
if($_SESSION['jabatan']=="Admin"){

}
else{
    echo '<script language="javascript">alert("Akses hanya untuk Admin"); document.location="index.php?page=data-artikel";</script>';
}
?>

<div class="col-xl-10 col-lg-7">
        <div class="card shadow mb-4">
            <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Form Penambahan Vendor</h6>
            </div>
            <div class="container" id="isi" >
            <form method="post" action="../class-user/operasi-vendor.php?action=add">
            <br>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Nama Vendor</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNama" name="nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNotlpn" class="col-sm-2 col-form-label">Kontak</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNo_tlpn" name="kontak" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputUsername" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="inputUsername" name="alamat" required style="height: 80px;"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100px;" name="submit" id="iconText">Submit</button>
            </form>
            
            <br><br>
            </div>
        </div>
    </div>


    <script type="text/javascript">
		$(document).ready(function(){
		    $("#iconText").click(function(){
		    	Swal.fire({
                  title: 'Data Berhasil Disimpan',
				  showConfirmButton: false,
                  type:'success',
				  timer: 1500
                 } )
                
		    });
        });
        

// document.addEventListener("DOMContentLoaded", () => {
//   /** selecting necessary elements **/
//   const form = document.getElementById("my-form");
//   let countSec = 10; /** seconds to wait **/

//   /** adding "submit" listener to the "form" **/
//   form.addEventListener("submit", e => {
//     /** it's better to implement a validation for the input's value but for the demo purposes we'll proceed without no any validations **/
//     e.preventDefault(); /** preventing the foem from submitting so we can do it programatically after the 10 seconds **/
//     /** show the countdown **/
//     countdown.classList.add('visible');
//     /** the function is executed every second. It mainly updates how many seconds left and if the 10 seconds are spent it redirects **/
//     timer = setInterval(() => {
//       if (countSec >= 0) remSec.textContent = countSec--;
//       else {
//         window.location.href = form.action.replace(/\/$/, "") + "/?username=" + username.value; /** the link is formed using the "target" attribute and the input's value **/
//         /** .replace(/\/$/, "") : trims the "/" char at the end of the target attribute if exists because we do add it manually so we ensure that it is always there **/
//       }
//     }, 1000); /** every second **/
//   });
// });
	</script>