<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = $_POST['id'];

  $kelas     = $_POST['nama_kelas'];
  $jurusan     = $_POST['kompetensi_keahlian'];

  //cek dulu jika merubah gambar produk jalankan coding ini
  
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE kelas SET nama_kelas = '$kelas' WHERE id_kelas = '$id'";
                    $result = mysqli_query($koneksi, $query);
                        $query  = "UPDATE kelas SET kompetensi_keahlian = '$jurusan' WHERE id_kelas = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='kelas.php';</script>";
                    }
              
			  
			  ?>
