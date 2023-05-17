<?php
// Create database connection using config file
include_once("../config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pesanan ORDER BY id DESC");
?>

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
     echo "User added successfully. <a href='index_pesanan.php'>View Users</a>";
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
      <div class="container-fluid">

      <a class="btn btn-primary" href="add_pesanan.php">Add New User</a><br/><br/>

    <table class="table text-center table-bordered">
    <thead class="thead-dark"> 
    <tr>
        <th>Tanggal</th>
        <th>Nama</th>
        <th>Jumlah</th>
        <th>deskripsi</th>
        <th>kategori</th>
        <th>Action</th>
    </tr>
    </thead>

    <tbody>
    <?php  
     $result = mysqli_query($mysqli, "SELECT * FROM pesanan");
    while($pesanan = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$pesanan['tanggal']."</td>";
        echo "<td>".$pesanan['nama_pemesan']."</td>";
        echo "<td>".$pesanan['jumlah_pesanan']."</td>";    
        echo "<td>".$pesanan['deskripsi']."</td>";       
        echo "<td>".$pesanan['produk_id']."</td>";       

        echo "<td><a href='edit_pesanan.php?id=$pesanan[id]'>Edit</a> | <a href='delete_pesanan.php?id=$pesanan[id]'>Delete</a></td></tr>";        
    }
    ?>
    </tbody>
    </table>
  

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


