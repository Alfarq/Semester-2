<?php
// Create database connection using config file
include_once("../config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM kategori_produk ORDER BY id DESC");
?>

 
<?php
 
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
     $nama = $_POST['nama'];
          
     // Insert user data into table
     $result = mysqli_query($mysqli, "INSERT INTO kategori_produk(nama) VALUES('$nama')");
     
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
    <a class="btn btn-primary" href="add_kategori.php">Add New User</a><br/><br/>
 
    <table class="table table-bordered">
    <thead class="text-center">
    <tr>
        <th>Nama</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php  
    $result = mysqli_query($mysqli, "SELECT * FROM kategori_produk");
    while($kategori = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$kategori['nama']."</td>"; 
        echo "<td><a href='edit_kategori.php?id=$kategori[id]'>Edit</a> | <a href='delete_kategori.php?id=$kategori[id]'>Delete</a></td></tr>";       
    }
    ?>
    </tbody>
    </table>
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

