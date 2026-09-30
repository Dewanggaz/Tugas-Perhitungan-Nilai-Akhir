<?php
$nama = "apel" ;
$kelas = "XII PPLG 2";

$nilaiTugas = 90;
$nilaiUts = 90;
$nilaiUas = 90;

$nilaiAkhir = ($nilaiTugas*30/100)+($nilaiUts*30/100)+($nilaiUas*40/100);
if ($nilaiAkhir >= 90 ) {
    $predikat = "A";
}elseif ($nilaiAkhir >= 80){
    $predikat = "B";
}elseif ($nilaiAkhir >= 70){
    $predikat = "C";
}elseif ($nilaiAkhir >= 60){
    $predikat = "D";
}else {
    $predikat = "E";
}



if ($nilaiAkhir >= 75) {
    $status = "LULUS";
}else {
    $status = "TIDAK LULUS";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        hr{
            width: 250px;
            display: inline-flex;
            
        }
    </style>
</head>
<body>
    <h2>Hasil Penilaian Siswa </h2>
    <p>Nama : <?= $nama?> </p>
    <p>Kelas : <?= $kelas?> </p>
    <hr >
    <p>Nilai Tugas : <?= $nilaiTugas ?></p>
    <p>Nilai UTS   : <?= $nilaiUts ?></p>
    <p>Nilai UAS   : <?= $nilaiUas ?></p>
    <hr>
    <p>total nilai : <?=  $nilaiAkhir?> </p>
    <p>predikat : <?=  $predikat?></p>
    <p>status : <?=  $status?></p>
</body>
</html>