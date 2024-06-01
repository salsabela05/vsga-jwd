# vsga-jwd-project-akhir
Repository pelatihan VSGA JWD Project Akhir

* inisialisasi data :
    - Beberapa array diinisialisasi untuk menyimpan opsi pilihan seperti jenis kelamin, jurusan, mata kuliah, dan agama.
    - Path file untuk menyimpan data mahasiswa juga ditetapkan.
* 
** Proses Penyimpanan Data Mahasiswa :
    - Ketika formulir disubmit ('btn-simpan'), data yang dimasukkan dari formulir disimpan dalam variabel PHP.
    - Dua fungsi 'nilaiHuruf()' dan 'keterangan()' digunakan untuk menghitung nilai huruf dan keterangan lulus berdasarkan nilai yang dimasukkan.
    - Data mahasiswa yang baru dimasukkan dikumpulkan dalam array '$dataMahasiswa' dan ditambahkan ke '$daftarMahasiswa'.
    - Data yang sudah diubah disimpan kembali dalam file JSON menggunakan 'file_put_contents()'
**
*** Formulir Input :
    - Formulir memungkinkan pengguna memasukkan data mahasiswa seperti NIM, nama, alamat, nomor telepon, jenis kelamin, email, tempat lahir, jurusan, tanggal lahir, mata kuliah, agama, dan nilai.
    - Setiap input memiliki elemen HTML yang sesuai seperti '<input>', '<select>', dan '<option>'.
***
**** Tabel Data Mahasiswa :
        - Data mahasiswa ditampilkan dalam tabel dengan kolom untuk NIM, nama, jenis kelamin, jurusan, mata kuliah, nilai, nilai huruf, dan keterangan lulus.
        - Data diambil dari array '$daftarMahasiswa' dan ditampilkan menggunakan loop 'foreach'.
****
***** Penggunaan Bootstrap :
        - Bootstrap digunakan untuk memperindah tampilan dengan memberikan warna dan gaya pada elemen-elemen HTML.
*****

dengan demikian, aplikasi ini memungkinkan pengguna untuk memasukkan data mahasiswa melalui form yang telah disediakan, dan data tersebut akan disimpan dan ditampilkan dalam bentuk tabel.


    






