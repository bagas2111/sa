<?php
include('config.php');
?>

<?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM kamar ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="a.css">
    <title>kamar</title>
</head>
<body>
    <div class="box">
        <h2><a href="" style="text-decoration:none ;">Hotel Hebat</a></h2>
        <div class="menu">
            <a href="logout.php"><img src="Logout.png" alt=""></a>
            <a href="#">fasilitas</a>
            <a href="#">Kamar</a>
            <a href="#">Home</a>
        </div>
        <div class="banner"></div>
        <div class="konten">
            <h5>Kamar</h5>
            <table>
                <tr>
                    <div class="deluxe">
                        <?php
                        $sql = "select * FROM kamar WHERE id=1";
                        $query = mysqli_query($koneksi, $sql);
                        while($siswa = mysqli_fetch_array($query)){
                            $tipe1=$siswa['tipe'];
                            $fasil1= $siswa['fasil'];
                            $gambar1='<img src="data:image/jpeg;base64,'.base64_encode( $siswa['gambar'] ).'"/>';
                        }
                        $sql2 = "select * FROM kamar WHERE id=2";
                        $query = mysqli_query($koneksi, $sql2);
                        while($siswa = mysqli_fetch_array($query)){
                            $tipe2=$siswa['tipe'];
                            $fasil2= $siswa['fasil'];
                            $gambar2='<img src="data:image/jpeg;base64,'.base64_encode( $siswa['gambar'] ).'"/>';
                        }
                        ?>
                        <div class="img">
                            <?php
                            echo $gambar1;
                            ?>
                        </div>
                        <h2><b><?php echo$tipe1; ?></b></h2>
                        <p><b><?php echo $fasil1; ?></b></p>
                    </div>
                </tr>
                <tr>
                    <div class="superior">
                        <img src="gam.png" alt="2">
                        <h2><b><?php echo $tipe2; ?></b></h2>
                        <p><b><?php echo $fasil2; ?></b></p>
                    </div>
                </tr>
                
            </table>
            
            
        </div>
    </div>
</body>
</html>