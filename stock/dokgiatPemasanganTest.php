<?php
use PHPUnit\Framework\TestCase;

class dokgiatPemasanganTest extends TestCase
{
    // public function testCreateRecord()
    // {
    //     include "dbconnect.php";  // Atur koneksi ke basis data tes
        
    //     $idx = "11";
    //     $tanggal = "2023-08-11";
    //     $lokasi = "madura";
    //     $kegiatan = "cctv";

    //     $sql = "INSERT INTO cctv_dokgiat_pemasangan (idx, tanggal, lokasi, kegiatan) VALUES ('$idx','$tanggal', '$lokasi', '$kegiatan')";
    //     $result = mysqli_query($conn, $sql);

    //     $this->assertTrue($result);  // Pastikan operasi create berhasil
    // }

    public function testReadRecords()
    {
        include "dbconnect.php";  // Atur koneksi ke basis data tes

        $sql = "SELECT * FROM cctv_dokgiat_pemasangan";
        $result = mysqli_query($conn, $sql);

        $this->assertGreaterThan(0, mysqli_num_rows($result));  // Pastikan ada data yang terbaca
    }

    // public function testUpdateRecord()
    // {
    //     include "dbconnect.php";  // Atur koneksi ke basis data tes

    //     $idx = 1;  // Gantilah dengan ID barang yang ingin diperbarui
    //     $tanggal_baru = 10;
    //     $lokasi_baru = 10;
    //     $kegiatan_baru = 10;

    //     $sql = "UPDATE cctv_dokgiat_pemasangan SET tanggal=$tanggal_baru, lokasi=$lokasi_baru, kegiatan=$kegiatan_baru WHERE idx=$idx";
    //     $result = mysqli_query($conn, $sql);

    //     $this->assertTrue($result);  // Pastikan operasi update berhasil
    // }
    

    // public function testDeleteRecord()
    // {
    //     include "dbconnect.php";  // Atur koneksi ke basis data tes

    //     $idx = 1;  // Gantilah dengan ID barang yang ingin dihapus

    //     $sql = "DELETE FROM  cctv_dokgiat_pemasangan WHERE idx=$idx";
    //     $result = mysqli_query($conn, $sql);

    //     $this->assertTrue($result);  // Pastikan operasi delete berhasil
    // }
}

