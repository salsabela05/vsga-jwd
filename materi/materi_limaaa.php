<?php
    //variable
    $nama_lengkap; //benar
    $_alamat; // benar
    // $1usia;// salah {dimulai dengan angka}
    // $nama lengkap; //salah {ada spasi}
    //$alamat!; // salah {ada karakter khusus !}
    // case sensitive
    $NAMA; // variabel ini berbeda dengan variable bawah
    $nama; 

    $harga = 10000; //tipe data angka (integer)
    $harga = "budi"; // tipe data String

    $angka_satu = 10; // angka (integral)
    $angka_dua = "5"; // huruf (string)

    $hasil = $angka_satu + $angka_dua;
    echo $hasil . "<br>";
    
    $data_string = "Pelatihan VSGA";
    echo 'Sedang ' . $data_string . "<br>"; // Sedang Pelatihan VSGA

    $asal = 'Lampung ';
    echo 'Asal saya dari $asal <br>';
    echo "Asal saya dari $asal <br>";

    $desimal = 10.87;

    $benar = true;
    $salah = false;

    echo "$benar <br>";
    echo "$salah <br>";

     // operasi perbandingan (boolean)
     $a = 1000 < 10000;
     echo "$a <br>";
     echo 1000 < 10000;
     