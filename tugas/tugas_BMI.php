<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas BMI </title>

    <link rel="stylesheet" href="../materi/css/bootstrap.css">
    
    <style>
    h4 {
        color: red;
    }

    #form-label {
        padding: 20px;
    }

</style>

</head>
<body>
    <!-- AWAL BAGIAN NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Aplikasi Pilihan BMI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- END BAGIAN NAVBAR -->

    <div class="container-fluid">
        <h4>Form PILIHAN BUAH</h4>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label> <!-- Input Nama Anda -->
                <input typer="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="mb-3">
            <label for="jenis_buah" class="form-label">Jenis Buah</label>
                <select class="form-select" name="jenis_buah" id="jenis_buah">
                    <option selected></option>
                    <option value="Apel">Apel</option>
                    <option value="Jeruk">Jeruk</option>
                    <option value="Nanas">Nanas</option>
                    <option value="Anggur">Anggur</option>
                </select>
            </div>
            <div class="mb-3">
            <label for="jumlah_buah" class="form-label">Jumlah Buah</label> 
                <input typer="text" name="jumlah_buah" id="jumlah_buah" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="btnSubmit" id="btnSubmit">Submit</button>
        </form>
    </div>
    <?php
    //pengecekan apakah btnSubmit diklik atau ada perubahan
    if(isset($_POST['btnSubmit'])) {
        $nama = $_POST['nama'];
        $jenisBuah = $_POST['jenis_buah'];
        $jumlahBuah = $_POST['jumlah_buah'];

        echo "nama: " . htmlspecialchars($nama) . "<br>";
        echo "Jenis Buah: " . htmlspecialchars($jenisBuah) . "<br>";
        echo "Jumlah Buah: " . htmlspecialchars($jumlahBuah) . "<br>";
    }
        ?>

</body>

<script src="../materi/js/bootstrap.js"></script>

</html>