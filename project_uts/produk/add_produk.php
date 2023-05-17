<?php
// Create database connection using config file
include_once("../config.php");

$query = "SELECT id, nama FROM kategori_produk";
$oke = mysqli_query($mysqli, $query);
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");
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


          <div class="container">
            <!-- <a href="index_produk.php">Go to Home</a> -->
            <br /><br />
            <form action="index_produk.php" method="post">
              <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode</label>
                <div class="col-8">
                  <input id="kode" name="kode" type="text" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                  <input id="nama" name="nama" type="text" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="harga_jual" class="col-4 col-form-label">Harga jual</label>
                <div class="col-8">
                  <input id="harga_jual" name="harga_jual" type="number" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                <div class="col-8">
                  <input id="harga_beli" name="harga_beli" type="number" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Stok</label>
                <div class="col-8">
                  <input id="stok" name="stok" type="number" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label>
                <div class="col-8">
                  <input id="min_stok" name="min_stok" type="number" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                <div class="col-8">
                  <input id="deskripsi" name="deskripsi" type="text" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="kategori_produk_id" class="col-4 col-form-label mb-3">Kategori</label>
                <div class="col-8">
                  <select id="kategori_produk_id" name="kategori_produk_id" required="required" class="form-select">
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
          </div>

          <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $harga_jual = $_POST['harga_jual'];
        $harga_beli = $_POST['harga_beli'];
        $stok = $_POST['stok'];
        $min_stok = $_POST['min_stok'];
        $deskripsi = $_POST['deskripsi'];
        $kategori = $_POST['kategori_produk_id'];
        
        // include database connection file
        include_once("../config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO produk(kode,nama,harga_jual,harga_beli,stok,min_stok,deskripsi,kategori_produk_id) VALUES('$kode','$nama','$harga_jual','$harga_beli','$stok','$min_stok','$deskripsi','$kategori')");
        
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
