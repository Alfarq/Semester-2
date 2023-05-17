<?php
// Create database connection using config file
include_once("../config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");
?>


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
             
     // Insert user data into table
     $result = mysqli_query($mysqli, "INSERT INTO produk(kode,nama,harga_jual,harga_beli,stok,min_stok,deskripsi,kategori_produk_id) VALUES('$kode','$nama','$harga_jual','$harga_beli','$stok','$min_stok','$deskripsi','$kategori')");
     
     // Show message when user added
     echo "User added successfully. <a href='index_produk.php'>View Users</a>";
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

      <a class="btn btn-primary" href="add_produk.php">Add New User</a><br/><br/>
    <!-- <table width='80%' border=1>
 
    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr> -->

    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">kode</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga Jual</th>
      <th scope="col">Harga Beli</th>
      <th scope="col">Stok</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>

    <?php  
    $result = mysqli_query($mysqli, "SELECT * FROM produk");
    while($produk = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$produk['kode']."</td>";
        echo "<td>".$produk['nama']."</td>";
        echo "<td>".$produk['harga_jual']."</td>";    
        echo "<td>".$produk['harga_beli']."</td>";    
        echo "<td>".$produk['stok']."</td>";    

        // var_dump($kategori);
        // foreach ($kategori as $d) {
        //     echo "<td>".$d['nama']."</td>";    

        // }
        echo "<td><a href='edit_produk.php?id=$produk[id]'>Edit</a> | <a href='delete_produk.php?id=$produk[id]'>Delete</a></td></tr>";        
    }
    ?>
</div>
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

