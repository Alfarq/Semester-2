<?php
// include database connection file
include_once ("../config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $min_stok = $_POST['min_stok'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori_produk_id'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE produk SET kode='$kode', nama='$nama', harga_jual='$harga_jual', harga_beli='$harga_beli', stok='$stok', min_stok='$min_stok', deskripsi='$deskripsi', kategori_produk_id='$kategori'  WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index_produk.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $kode = $user_data['kode'];
    $nama = $user_data['nama'];
    $harga_jual = $user_data['harga_jual'];
    $harga_beli = $user_data['harga_beli'];
    $stok = $user_data['stok'];
    $min_stok = $user_data['min_stok'];
    $deskripsi = $user_data['deskripsi'];
    $kategori = $user_data['kategori_produk_id'];
}
?>


<?php 
include_once '../template/cdn.php';
?>


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

    <form name="update_user" method="post" action="edit_produk.php">
  <div class= "form-group row mb-3">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" type="text" value=<?php echo $kode;?> class="form-control">
    </div>
  </div>
  <div class="form-group row mb-3">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" value=<?php echo $nama;?> class="form-control">
    </div>
  </div>
  <div class="form-group row mb-3">
    <label for="harga_jual" class="col-4 col-form-label">Harga jual</label> 
    <div class="col-8">
      <input id="harga_jual" name="harga_jual" type="text" value=<?php echo $harga_jual;?> class="form-control">
    </div>
  </div>
  <div class="form-group row mb-3">
    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
    <div class="col-8">
      <input id="harga_beli" name="harga_beli" type="text" value=<?php echo $harga_beli;?> class="form-control">
    </div>
  </div>
  <div class="form-group row mb-3">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="stok" name="stok" type="text" value=<?php echo $stok;?> class="form-control">
    </div>
  </div>
  <div class="form-group row mb-3">
    <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label> 
    <div class="col-8">
      <input id="min_stok" name="min_stok" type="text" value=<?php echo $min_stok;?> class="form-control">
    </div>
  </div>
  <div class="form-group row mb-3">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="deskripsi" name="deskripsi" type="text" value=<?php echo $deskripsi;?>  class="form-control">
    </div>
  </div>
  <div class="form-group row mb-3">
    <label for="kategori_produk_id" class="col-4 col-form-label">Kategori</label> 
    <div class="col-8">
      <input id="kategori_produk_id" name="kategori_produk_id" type="text" value=<?php echo $kategori;?> class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
    <input type="submit" name="update" value="Update">
    </div>
  </div>
</form>
  

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

