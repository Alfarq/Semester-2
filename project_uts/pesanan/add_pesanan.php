<?php
// Create database connection using config file
include_once("../config.php");

$query = "SELECT id, nama FROM produk";
$oke = mysqli_query($mysqli, $query);
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pesanan ORDER BY id DESC");
?>

<?php include_once '../template/cdn.php';?>

  <div class="wrapper">

    <!-- Navbar -->
    <?php include_once '../template/headerAdmin.php';?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once '../template/sidebar.php';?>




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">


          
            <!-- <a href="index_produk.php">Go to Home</a> -->
            
                    <form action="index_pesanan.php" method="post" name="form1">
                        <div class="form-group row">
                            <label for="tanggal" class="col-4 col-form-label mb-3">Tanggal</label>
                            <div class="col-8">
                                <input id="tanggal" name="tanggal" type="date" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-4 col-form-label mb-3">Nama</label>
                            <div class="col-8">
                                <input id="text" name="nama_pemesan" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_pemesan" class="col-4 col-form-label mb-3">Alamat</label>
                            <div class="col-8">
                                <input id="alamat_pemesan" name="alamat_pemesan" type="text" required="required"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_hp" class="col-4 col-form-label mb-3">No.Telpon</label>
                            <div class="col-8">
                                <input id="no_hp" name="no_hp" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label mb-3">Email</label>
                            <div class="col-8">
                                <input id="email" name="email" type="email" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah_pemesan" class="col-4 col-form-label mb-3">Jumlah</label>
                            <div class="col-8">
                                <input id="jumlah_pemesan" name="jumlah_pesanan" type="number" class="form-control"
                                    required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-4 col-form-label mb-3">Deskripsi</label>
                            <div class="col-8">
                                <input id="deskripsi" name="deskripsi" type="text" required="required"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="produk_id" class="col-4 col-form-label mb-3">Produk</label>
                            <div class="col-8">
                                <select id="produk_id" name="produk_id" required="required" class="form-select">
                                    <option value="">--- choose ---</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($oke)) {
                                    $id = $row['id'];
                                    $nama_produk = $row['nama'];             
                                    ?>
                                    <option value="<?= $id?>">
                                        <?= $nama_produk?>
                                    </option>

                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="Submit" type="submit" class="btn btn-primary" value="Add">Submit</button>
                            </div>
                        </div>
                    </form>
          

                    <?php
 
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
     $tanggal = $_POST['tanggal'];
     $nama = $_POST['nama_pemesan'];
     $alamat = $_POST['alamat_pemesan'];
     $telpon = $_POST['no_hp'];
     $email = $_POST['email'];
     $jumlah = $_POST['jumlah_pesanan'];
     $deskripsi = $_POST['deskripsi'];
     $produk = $_POST['produk_id'];
     
     // include database connection file
     

     
             
     // Insert user data into table
     $result = mysqli_query($mysqli, "INSERT INTO pesanan(tanggal,nama_pemesan,alamat_pemesan,no_hp,email,jumlah_pesanan,deskripsi,produk_id) VALUES('$tanggal','$nama','$alamat','$telpon','$email','$jumlah','$deskripsi','$produk')");
     
     // Show message when user added
 }
 ?>


          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    
    <!-- /.control-sidebar -->


    <!-- Main Footer -->
    <?php include_once '../template/footerAdmin.php';?>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
