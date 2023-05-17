<?php
// include database connection file
include_once("../config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama = $_POST['nama'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE kategori_produk SET nama='$nama'  WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index_kategori.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM kategori_produk WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
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
                <form name="update_user" method="post" action="edit_kategori.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 text-right col-form-label">Nama</label>
                        <div class="col-6">
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                            <input type="submit" name="update" value="Update">  
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