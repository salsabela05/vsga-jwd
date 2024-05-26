<?php
// menulis variabel di php, dimuli dengan tanda $
$nama = 'Micheal';
$nama = 10;

$pertama = 5;
$kedua = 10;

$jumlah = $pertama + $kedua;

$dariFunction = penjumlahan(60, 80);

function penjumlahan($a, $b) 
{
    return $a + $b;
}

function pengurangan() 
{
   echo 800000;
}

//mengambil data dari URL GET
$angka_pertama = $_GET['pertama'];
$angka__kedua = $_GET['kedua'];

$hasil = $angka_pertama + $angka__kedua;
echo $hasil;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="get">
        Angka Pertama : <input type="number" name="pertama" /> <br>
        Angka Kedua : <input type="number" name="kedua" /> <br>
        <input type="submit" name="btnHitung" value="penjumlahan" />
    </form>   

</body>

</html>