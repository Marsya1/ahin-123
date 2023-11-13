<?php
use PHPUnit\Framework\TestCase;

class invkbrshn_test extends TestCase
{
    // public function testCreateRecord()
    // {
    //     include "dbconnect.php";  // Atur koneksi ke basis data tes

    //     $idx = 9;
    //     $tangggal = "2023-08-11";
    //     $nama_barang = "cctv";
    //     $stock = 11;

    //     $sql = "INSERT INTO sits_invkbrshn (idx, tanggal, nama_barang, stock) VALUES ('$idx','$tanggal','$nama_barang', '$stock')";
    //     $result = mysqli_query($conn, $sql);

    //     $this->assertTrue($result);  // Pastikan operasi create berhasil
    // }
    // public function testReadRecords()
    // {
    //     include "dbconnect.php";  // Atur koneksi ke basis data tes

    //     $sql = "SELECT * FROM sits_invkbrshn";
    //     $result = mysqli_query($conn, $sql);

    //     $this->assertGreaterThan(0, mysqli_num_rows($result));  // Pastikan ada data yang terbaca
    // }

    // public function testUpdateRecord()
    // {
    //     include "dbconnect.php";  // Atur koneksi ke basis data tes

    //     $idx = 1;  // Gantilah dengan ID barang yang ingin diperbarui
    //     $nama_barang_baru = 15;
    //     $tanggal_baru = 10;
    //     $stock_baru = 10;

    //     $sql = "UPDATE sits_invkbrshn SET nama_barang=$nama_barang_baru, tanggal=$tanggal_baru, stock=$stock_baru WHERE idx=$idx";
    //     $result = mysqli_query($conn, $sql);

    //     $this->assertTrue($result);  // Pastikan operasi update berhasil
    // }
    public function testDeleteRecord()
    {
        include "dbconnect.php";  // Atur koneksi ke basis data tes

        $idx = 1;  // Gantilah dengan ID barang yang ingin dihapus

        $sql = "DELETE FROM sits_invkbrshn WHERE idx=$idx";
        $result = mysqli_query($conn, $sql);

        $this->assertTrue($result);  // Pastikan operasi delete berhasil
    }
}

