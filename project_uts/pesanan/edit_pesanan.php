
<?php
// include database connection file
include_once("../config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama_pemesan'];
    $alamat = $_POST['alamat_pemesan'];
    $telpon = $_POST['no_hp'];
    $email = $_POST['email'];
    $jumlah = $_POST['jumlah_pesanan'];
    $deskripsi = $_POST['deskripsi'];
    $produk = $_POST['produk_id'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE pesanan SET tanggal='$tanggal', nama_pemesan='$nama', alamat_pemesan='$alamat', no_hp='$telpon', email='$email', jumlah_pesanan='$jumlah', deskripsi='$deskripsi', produk_id='$produk'  WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index_pesanan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pesanan WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $kode = $user_data['tanggal'];
    $nama = $user_data['nama_pemesan'];
    $alamat = $user_data['alamat_pemesan'];
    $telpon = $user_data['no_hp'];
    $email = $user_data['email'];
    $jumlah = $user_data['jumlah_pesanan'];
    $deskripsi = $user_data['deskripsi'];
    $produk = $user_data['produk_id'];
}
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
    <div class="container">
    <a href="index_pesanan.php">Home</a>
    <br/><br/>
    <form name="update_user" method="post" action="edit_pesanan.php">
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="text" value=<?php echo $kode;?> class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" value=<?php echo $nama;?> class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat_pemesan" name="alamat_pemesan" type="text" value=<?php echo $alamat;?> class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="no_hp" class="col-4 col-form-label">No.Telpon</label> 
    <div class="col-8">
      <input id="no_hp" name="no_hp" type="text" value=<?php echo $telpon;?> class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" value=<?php echo $email;?> class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" value=<?php echo $jumlah;?> class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="deskripsi" name="deskripsi" type="text" value=<?php echo $deskripsi;?> class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Produk</label> 
    <div class="col-8">
      <input id="produk_id" name="produk_id" type="text" value=<?php echo $produk;?> class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
        <input class="btn btn-succes" type="submit" name="update" value="Update">
    </div>
  </div>
</form>
    </div>
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


















<!-- <form name="update_user" method="post" action="edit_pesanan.php">
        <table border="0">
            <tr> 
                <td>Tanggal</td>
                <td><input type="text" name="tanggal" value=<?php echo $kode;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_pemesan" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat_pemesan" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>No.Telpon</td>
                <td><input type="text" name="no_hp" value=<?php echo $telpon;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Jumlah pesanan</td>
                <td><input type="text" name="jumlah_pesanan" value=<?php echo $jumlah;?>></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value=<?php echo $deskripsi;?>></td>
            </tr>
            <tr> 
                <td>produk</td>
                <td><input type="text" name="produk_id" value=<?php echo $produk;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form> -->