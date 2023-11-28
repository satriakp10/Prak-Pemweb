<?php
// Satria Kemala Putra
// 121140112
// Kelas RB

//---------------PRAK 7---------------//

// Mendefinisikan class InformasiPribadi
class InformasiPribadi {
  // Membuat atribut nama, alamat, dan surel
  public $nama;
  public $alamat;
  public $surel;

  // Membuat konstruktor untuk menginisialisasi atribut
  public function __construct($nama, $alamat, $surel) {
    $this->nama = $nama;
    $this->alamat = $alamat;
    $this->surel = $surel;
  }

  // Membuat metode untuk menampilkan informasi pribadi
  public function tampilkanInfo() {
    echo "Nama: " . $this->nama . "<br>";
    echo "Alamat: " . $this->alamat . "<br>";
    echo "Surel: " . $this->surel . "<br>";
  }
}

// Membuat objek dari class InformasiPribadi
$info1 = new InformasiPribadi("Satria Kemala Putra", "Kalianda", "satria@gmail.com");
$info2 = new InformasiPribadi("Fadillah Rizky Jungjungnan", "Kota Baru", "eky@gmail.com");

// Memanggil metode tampilkanInfo dari objek
$info1->tampilkanInfo();
$info2->tampilkanInfo();
?>
