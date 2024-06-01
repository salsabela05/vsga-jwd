<?php
    $daftarJenisKelamin = array("Laki-laki", "Perempuan");
    $daftarGolongan = ["I","II","III"];

    // mengambil data file json
    $fileDataKaryawan = "data/data_karyawan.json";
    $isiDataKaryawan = file_get_contents($fileDataKaryawan);

    $daftarKaryawan = array();
    // mengubah isi data karyawan ke array associative
    $daftarKaryawan = json_decode($isiDataKaryawan, true);

    if(isset($_POST['btn-simpan'])) { // jika button simpan di klik
        // get data dari post
        $nik = $_POST['nik'];
        $nama = $_POST['nama-karyawan'];
        $jenisKelamin = $_POST['jeniskelamin'];
        $golongan = $_POST['golongan'];

        // Data karyawan yang diinput dimasukkan kedalam array
        $dataKaryawan = array(
            "nik" => $nik,
            "nama" => $nama,
            "jenis-Kelamin" => $jenisKelamin,
            "golongan" => $golongan
        );

        // memasukkan array data karyawan yang baru, ke daftar karyawan sebelumnya
        array_push($daftarKaryawan, $dataKaryawan);

        // mengubah array data karyawan ke json format
        $dataYangInginDitulisKeFile = json_encode($daftarKaryawan, JSON_PRETTY_PRINT);

        // tulis ke file data_karyawan.json
        file_put_contents($fileDataKaryawan, $dataYangInginDitulisKeFile);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh project</title>

    <!-- Memanggil CSS Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.css"> 
</head>
<body>
    <!-- Navbar -->
    <!-- / Navbar -->

    <!-- Content -->
    <div class="container pt-4">
        <h1> Aplikasi Data Karyawan</h1>
        <hr>
        <form action="#" method="post">
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nama-karyawan" class="form-label">Nama Karyawan</label>
                <input type="text" name="nama-karyawan" id="nama-karyawan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jeniskelamin" id="jeniskelamin">
                    <?php
                    for($jk = 0; $jk < count($daftarJenisKelamin); $jk++) {
                        echo "<option value='$daftarJenisKelamin[$jk]'> $daftarJenisKelamin[$jk] </option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="golongan" class="form-label">Golongan</label>
                <select name="golongan" id="golongan" class="form-select">
                    <?php
                    foreach($daftarGolongan as $gol) {
                        echo "<option value='$gol'> $gol </option>";
                    }
                    ?>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="btn-simpan" id="btn-simpan">
                        Simpan
                    </button>
                </div>
            </form>
            <hr>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <td>NIK</td>
                        <td>Nama Karyawan</td>
                        <td>Jenis Kelamin</td>
                        <td>Golongan</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($daftarKaryawan as $Karyawan) {
                        echo "<tr>";
                        echo "<td>" . $Karyawan['nik'] . "</td>";
                        echo "<td>" . $Karyawan['nama'] . "</td>";
                        echo "<td>" . $Karyawan['jenis-Kelamin'] . "</td>";
                        echo "<td>" . $Karyawan['golongan'] . "</td>";
                        echo "</tr>";

                    }
                    ?>
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>

    <!-- / Content -->

    <!-- Memanggil JS Bootstrap-->
    <script src="js/bootstrap.js"></script>
</body>
</html>