<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
form{
    width: 50%;
    margin: auto;    
}

</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12">
                <h4>Form Nilai Mahasiswa</h4>
                <hr>
            <form method="POST" action="hasil.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label"><b>Nama Lengkap</b></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label"><b>Mata Kuliah</b></label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select" placeholder="Pilih Mata Kuliah" required>
        <option value="DDP">DDP</option>
        <option value="Basis Data"><b>Basis Data</b></option>
        <option value="Pemrograman Web"><b>Pemrograman Web</b></option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label"><b>Nilai UTS</b></label> 
    <div class="col-8">
      <input id="text1" name="uts" type="number" class="form-control" min="0" max="100" placeholder="Masukan Nilai UTS" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label"><b>Nilai UAS</b></label> 
    <div class="col-8">
      <input id="text2" name="uas" type="number" class="form-control" min="0" max="100" placeholder="Masukan Nilai UAS" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label"><b>Nilai Tugas/Praktikum</b></label> 
    <div class="col-8">
      <input id="text3" name="tugas" type="number" class="form-control" min="0" max="100" placeholder="Masukan Nilai Tugas" required>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
            </div>
        </div>
    </div>

    
</body>
</html>