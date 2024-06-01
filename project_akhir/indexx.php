<?php
$daftarJenisKelamin = array("laki-laki", "perempuan");
$daftarJurusan = array("Ilmu Komputer","Teknik Informatika","Sistem Informasi","Manajemen Informatika","Pendidikan","Matematika");
$daftarMatakuliah = array("Kalkulus","Bahasa Inggris","Multimedia","Pendidikan Pancasila","Basis Data","Jaringan Komputer","Bahasa Indonesia","Statistik","Analisi Numerik","Pemrograman Web");
$daftarAgama = array("Islam","Kristen","Katolik","Hindu","Buddha","khonghucu");

$fileDataMahasiswa = "data/data_mahasiswa.json";
$isiDataMahasiswa = file_get_contents($fileDataMahasiswa);

$daftarMahasiswa = array();
$daftarMahasiswa = json_decode($isiDataMahasiswa, true);

if (isset($_POST['btn-simpan'])) {
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $nama = $_POST['nama'];
    $noTelpn = $_POST['notelpn'];
    $jenisKelamin = $_POST['jeniskelamin'];
    $email = $_POST['email'];
    $tempatLahir = $_POST['tempatlahir'];
    $jurusan = $_POST['jurusan'];
    $tanggalLahir = $_POST['tanggallahir'];
    $matakuliah = $_POST['matakuliah'];
    $agama = $_POST['agama'];
    $nilai = $_POST['nilai'];

    function nilaiHuruf($nilai)
    {
        if ($nilai <= 100 && $nilai >= 91) {
            return "A";
            # code...
        } elseif ($nilai <= 90 && $nilai >= 81) {
            return "B";
        } elseif ($nilai <= 80 && $nilai >= 71) {
            return "C";
        } elseif ($nilai <= 70 && $nilai >= 61) {
            return "D";
        } elseif ($nilai <= 60 && $nilai >= 0) {
            return "E";
        } else {
            return "";
        }
    };

    $nilaiHuruf = nilaiHuruf($nilai);

    function keterangan($nilai)
    {
        if ($nilai >= 71) {
            return "Lulus";
           
        } elseif ($nilai <= 70 && $nilai >= 0) {
            return "Tidak Lulus";
        } else {
            return "";
        }
    };

    $keterangan = keterangan($nilai);

    $dataMahasiswa = array(
        "nim" => $nim,
        "nama" => $nama,
        "alamat" => $alamat,
        "notelpn" => $noTelpn,
        "jeniskelamin" => $jenisKelamin,
        "email" => $email,
        "tempatlahir" => $tempatLahir,
        "jurusan" => $jurusan,
        "tanggallahir" => $tanggalLahir,
        "matakuliah" => $matakuliah,
        "agama" => $agama,
        "nilai" => $nilai,
        "nh" => $nilaiHuruf,
        "ket" => $keterangan
    );

    array_push($daftarMahasiswa, $dataMahasiswa);

    $dataYangInginDitulisKefile = json_encode($daftarMahasiswa, JSON_PRETTY_PRINT);

    file_put_contents($fileDataMahasiswa, $dataYangInginDitulisKefile);

};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project AKhir say</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/UM-Metro.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Tugas Akhir VSGA G5 -JWD C
            </a>
        </div>
    </nav>

    <div class="container-fluid p-3">
        <div class="row bg-info">
            <div class="col text-center">
                <h3>Form Mahasiswa</h3>
            </div>
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" placeholder="nim">
                    </div>
                </div>

                <div class="col">
                    <div class="pt-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
                    </div>
                </div>

                <div class="col">
                    <div class="pt-3">
                        <label for="notelpn" class="form-label">No Telpn</label>
                        <input type="text" class="form-control" name="notelpn" id="notelpn" placeholder="No telepon">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jeniskelamin" id="jeniskelamin" placeholder="Jenis Kelamin">
                            <?php
                            foreach ($daftarJenisKelamin as $jk) {
                                echo "<option value='$jk'>$jk</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="pt-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir">
                    </div>
                </div>

                <div class="col">
                    <div class="pt-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" name="jurusan" id="jurusan" placeholder="Jurusan">
                            <?php
                            foreach ($daftarJurusan as $dj) {
                                echo "<option value='$dj'>$dj</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" placeholder="tanggal-lahir">
                    </div>
                </div>

                <div class="col">
                    <div class="pt-3">
                        <label for="matakuliah" class="form-label">Mata kulaih</label>
                        <select class="form-select" name="matakuliah" id="matakuliah" placeholder="Mata Kulaih">
                            <?php
                            foreach ($daftarMatakuliah as $dm) {
                                echo "<option value='$dm'>$dm</option>";
                                
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <label for="agama" class="form-label">Agama</label>
                        <select class="form-select" name="agama" id="agama" placeholder="Agama">
                            <?php
                            foreach ($daftarAgama as $am) {
                                echo "<option value='$am'>$am</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="pt-3">
                        <label for="nilai" class="form-label">Nilai</label>
                        <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="pt-3">
                    <button type="submit" class="btn btn-primary w-50" name="btn-simpan" id="btn-simpan">
                        Simpan
                    </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="row bg-info mt-3 mb-3">
            <div class="col text-center">
                <h3>Daftar Mahasiswa</h3>
            </div>
        </div>

        <div>
            <table class="table table-striped table-inverse table-secondary">
                <thead class="thead-inverse">
                    <tr>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>JENIS KELAMIN</th>
                        <th>JURUSAN</th>
                        <th>MATA KULIAH</th>
                        <th>NILAI</th>
                        <th>NH</th>
                        <th>KET</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($daftarMahasiswa as $mahasiswa) {

                        echo "<tr>";
                        echo "<td>" . $mahasiswa['nim'] . "</td>";
                        echo "<td>" . $mahasiswa['nama'] . "</td>";
                        echo "<td>" . $mahasiswa['jeniskelamin'] . "</td>";
                        echo "<td>" . $mahasiswa['jurusan'] . "</td>";
                        echo "<td>" . $mahasiswa['matakuliah'] . "</td>";
                        echo "<td>" . $mahasiswa['nilai'] . "</td>";
                        echo "<td>" . $mahasiswa['nh'] . "</td>";
                        echo "<td>" . $mahasiswa['ket'] . "</td>";
                        echo "<tr>";
                    };
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>