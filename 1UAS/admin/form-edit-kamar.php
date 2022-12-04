<?php 
 include("../config.php");
 if ( !isset($_GET['id']) ) {
 	header('Location: edit-kamar.php');
 }

 $id = $_GET['id'];


 $sql = "select * FROM kamar WHERE id=$id";
 $query = mysqli_query($koneksi, $sql);
 $siswa = mysqli_fetch_assoc($query);

 if (mysqli_num_rows($query) < 1) {
 	die("data tidak ditemukan");
 }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>formulir data siswa</title>
</head>
<body>
    <header>
        <h3>formulir data edit siswa</h3>
    </header>
    <form action="proses-edit-kamar.php" method="post">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">

            <p>
                <label for="tipe">tipe: </label>
                <input type="text" name="tipe" placeholder="tipe kamar" value="<?php echo $siswa['tipe'] ?>">
            </p>
            <p>
                <label for="fasil">fasilitas: </label>
                <textarea name="fasil"><?php echo $siswa['fasil'] ?></textarea>
            </p>
            <p>
                <input type="submit" name="simpan" value="simpan">
            </p>
        </fieldset>
    </form>

</body>
</html>