<?php
include('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .menu a{
        color: black;
        text-decoration: none;
        float: right;
        padding: 5px 16px 5px 16px;
        text-align: center;
        display: block;
        transition: 0.8s
    }
    .menu a:hover{
        color: #d22525;
        text-decoration: underline;
    }
    .box{
        width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }
    .banner{
        width: 1200px;
        height: 350px;
        background-color: #d22525; 
        /*margin-left: auto;
        margin-right: auto;*/
        background-image: url(../sa.png);
        background-size: 1200px 350px;
        margin-bottom: 5px;
        margin-top: 90px;
        margin-right: auto;
        margin-left: auto;
    }
    h2{
        position:relative;
        top: 60px;
        width: 800px;
    }
    table{
        box-sizing: border-box;

        position: absolute;
        width: 1047px;
        height: 471px;
        left: 252px;
        top: 520px;

        background: #D9D9D9;
        border: 1px solid #000000;
        border-radius: 6px;
    }
    </style>
    <title>asdasd</title>
</head>
<body>
    <div class="box">
            <h2><a href="" style="text-decoration:none ;">Hotel Hebat</a></h2>
            <div class="menu">
            <a href="../logout.php"><img src="../Logout.png" alt=""></a>
            <a href="#">fasilitas</a>
            <a href="#">Kamar</a>
            <a href="#">Home</a>
            </div>
            <div class="banner"></div>
            <div class="konten">
                <table border="1">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>tipe</th>
                            <th>nama fasilitas</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "select * FROM fasilitas";
                            $query = mysqli_query($koneksi, $sql);

                            while($siswa = mysqli_fetch_array($query)){
                                echo "<tr>" ;

                                echo "<td>".$siswa['id']."</td>";
                                echo "<td>".$siswa['nama']."</td>";
                                echo "<td>".$siswa['gambar']."</td>";
                                echo "<td>";
                                echo "<a href='form-edit-fasilitas.php?id=".$siswa['id']."'>edit</a> | ";
                                echo "<a href='hapus-data.php?id=".$siswa['id']."'>hapus</a>";
                                echo "</td>";

                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
    </div>
    
    
</body>
</html>

