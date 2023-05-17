<?php
require_once "../config.php";
require_once '../template/header.php';


    // $sqljenis = "SELECT * FROM produk";
    // $rowjenis = $mysqli->prepare($sqljenis);
    // $rowjenis->execute();
    $query = "SELECT id, nama FROM produk";
    $result = mysqli_query($mysqli, $query);

?>

<!--Main layout-->

    <div class="container">
        <!-- Heading -->
        <h2 class="my-5 text-center"><b> Checkout </b></h2>

        <!--Grid row-->
        <div class="row">
            <div class="col-2">
            </div>
            <!--Grid column-->
            <div class="col-md-8 mb-4">
                <!--Card-->
                <div class="card p-4 bg-light">
                    <form action="../pesanan/index_pesanan.php" method="post" name="form1">
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
                                    while ($row = mysqli_fetch_assoc($result)) {
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
                <!-- </form> -->
                <!-- Promo code -->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>

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
        
    }
    ?>




<!--Main layout-->

<!-- footer -->
<?php require_once '../template/footer.php';?>