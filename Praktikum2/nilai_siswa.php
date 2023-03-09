<?php if(isset($_POST['submit'])) : ?>

<?php


$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
/*
if(empty($_POST['nama']) || empty($_POST['email']) || empty($_POST['pesan'])) {
    echo "Harap isi semua input";
    die();
} else {
    // kode jika input terisi
}
*/


// Nilai Total
$nilai_uts = $uts * 0.3;
$nilai_uas = $tugas * 0.35;
$nilai_tugas = $tugas * 0.35;

$nilai_total = $nilai_uts + $nilai_uas + $nilai_tugas;



// Keterangan
if($nilai_total > 55){
    $keterangan = 'Lulus';
}
else{
    $keterangan = 'Tidak Lulus';
}


// Grade
if($nilai_total >= 0 and $nilai_total <= 35){
    $grade = 'E';
}elseif($nilai_total >= 36 and $nilai_total <= 55){
    $grade = 'D';
}elseif($nilai_total >= 56 and $nilai_total <= 69){
    $grade = 'C';
}elseif($nilai_total >= 70 and $nilai_total <= 84){
    $grade = 'B';
}elseif($nilai_total >= 85 and $nilai_total <= 100){
    $grade = 'A';
}else{
    $grade = 'I';
}

// Predikat
switch($grade){
    case 'E':
        $hasil = 'Sangat Kurang';
    break;
    case 'D':
        $hasil = 'Kurang';
    break;
    case 'C':
        $hasil = 'Cukup';
    break;
    case 'B':
        $hasil = 'Memuaskan';
    break;
    case 'A':
        $hasil = 'Sangat Memuaskan';
    break;
    default:
        $hasil = 'Tidak Ada';
}

// Print
echo 'Nama Mahasiwa : '. $nama;
echo '<br> Mata Kuliah : '. $matkul;
echo '<br> Nilai UTS : '. $uts;
echo '<br> Nilai UAS : '. $uas;
echo '<br> Nilai Tugas/Praktikum : '. $tugas;
echo '<br>Nilai Total : '. $nilai_total;
echo '<br>Grade : '. $grade;
echo '<br>Predikat : '. $hasil;
echo '<br>Keterangan : '. $keterangan;

?>

<?php endif ?>