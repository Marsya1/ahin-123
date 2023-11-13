<?php
use PHPUnit\Framework\TestCase;

class dokgiatTest extends TestCase
{
    public function testCreateRecord()
    {
        include "dbconnect.php";  // Atur koneksi ke basis data tes

       
        $idx = 9;
        $tanggal = "2023-08-11";
        $jam = "19:50:00";
        $lokasi = "malang";
        $kegiatan = "menghias";
        $progres = "sudah";
        $maintener = "vije";
        $tglup = "2023-09-25";

        $sql = "INSERT INTO cctv_dokgiat_satgas (idx, tanggal, jam, lokasi, kegiatan, progres, maintener, tglup) VALUES ('$idx','$tanggal','$jam', '$lokasi', '$kegiatan', '$progres', '$maintener', '$tglup' )";
        $result = mysqli_query($conn, $sql);

        $this->assertTrue($result);  // Pastikan operasi create berhasil
    }
    // public function testReadRecords()
    // {
    //     include "dbconnect.php";  // Atur koneksi ke basis data tes

    //     $sql = "SELECT * FROM cctv_dokgiat_satgas";
    //     $result = mysqli_query($conn, $sql);

    //     $this->assertGreaterThan(0, mysqli_num_rows($result));  // Pastikan ada data yang terbaca
    // }

   
    // public function testUpdateRecord()
    // {
    //     include "dbconnect.php";  // Atur koneksi ke basis data tes

    //     $idx = 1;  // Gantilah dengan ID barang yang ingin diperbarui
    //     $tanggal_baru = 15;
    //     $jam_baru = 15;
    //     $lokasi_baru = 15;
    //     $kegiatan_baru =15;
    //     $progres_baru = 15;
    //     $maintener_baru = 15;
    //     $tglup_baru = 15;

    //     $sql = "UPDATE cctv_dokgiat_satgas SET tanggal=$tanggal_baru, jam=$jam_baru, lokasi=$lokasi_baru, kegiatan=$kegiatan_baru, progres=$progres_baru, maintener=$maintener_baru, tglup=$tanggal_baru WHERE idx=$idx";
    //     $result = mysqli_query($conn, $sql);

    //     $this->assertTrue($result);  // Pastikan operasi update berhasil
    // }

    // public function testDeleteRecord()
    // {
    //     include "dbconnect.php";  // Atur koneksi ke basis data tes

    //     $idx = 1;  // Gantilah dengan ID barang yang ingin dihapus

    //     $sql = "DELETE FROM cctv_dokgiat_satgas WHERE idx=$idx";
    //     $result = mysqli_query($conn, $sql);

    //     $this->assertTrue($result);  // Pastikan operasi delete berhasil
    // }
}

