<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="a.css">
    <title>index</title>
</head>
<body>
    <?php
    $sql = "SELECT * FROM fasilitas WHERE id=1";
    $query = mysqli_query($koneksi, $sql);
        //$image = base64_encode(file_get_contents(addslashes($image)));
    while($siswa = mysqli_fetch_array($query)){
        $tar1 = '<img src="data:image/jpeg;base64,'.base64_encode( $siswa['gambar'] ).'"width="380"/>';
    }
    
    $sql2 = "SELECT * FROM fasilitas WHERE id=2";
    $query = mysqli_query($koneksi, $sql2);
        //$image = base64_encode(file_get_contents(addslashes($image)));
    while($siswa = mysqli_fetch_array($query)){
        $tar2 = '<img src="data:image/jpeg;base64,'.base64_encode( $siswa['gambar'] ).'"width="390"/>';
    }
    
    $sql3 = "SELECT * FROM fasilitas WHERE id=3";
    $query = mysqli_query($koneksi, $sql3);
        //$image = base64_encode(file_get_contents(addslashes($image)));
    while($siswa = mysqli_fetch_array($query)){
        $tar3 = '<img src="data:image/jpeg;base64,'.base64_encode( $siswa['gambar'] ).'"width="380"/>';
    }
    ?>
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
            <h3>FASILITAS</h3>
            <table>
                <tr>
                    <td><?php echo $tar1;?></td>
                    <td><?php echo $tar2;?></td>
                    <td><?php echo $tar3;?></td>
                    <td><img src="" alt="" width="380"></td>
                </tr>
            </table>
            
        </div>
    </div>
    

</body>
</html>