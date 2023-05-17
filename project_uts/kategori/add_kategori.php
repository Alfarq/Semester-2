

<?php
// Create database connection using config file
include_once("../config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM kategori_produk ORDER BY id DESC");
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
    <a href="index_kategori.php">Go to Home</a>
    <br/><br/>
    
    <form action="index_kategori.php" method="post">
    <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-2 col-8">
      <button name="Submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </div>
</div>
</form>


  
    </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
    

  <!-- Main Footer -->
  <?php include_once '../template/footerAdmin.php';?>
</div>
<!-- ./wrapper -->




