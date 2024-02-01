<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if(!$_POST["nama"] || !$_POST["email"] || !$_POST["ttl"]){
    header('Location: ./input.php');
}
?>
    <h2>Berikut Data Yang Anda Input</h2>
    <h2>=============</h2>
Nama: <?= $_POST["nama"] ?><br>
Tempat, Tgl.Lahir : <?= $_POST["ttl"] ?><br>
Agama: <?= $_POST["agama"] ?><br>
Alamat: <?= $_POST["alamat"] ?><br>
Email: <?= $_POST["email"] ?><br>
Agama: <?= $_POST["agama"] ?><br>
No. HP: <?= $_POST["nohp"] ?><br>
Sekolah: <?= $_POST["sekolah"] ?><br>
Kelas: <?= $_POST["kelas"] ?><br>
Blog: <?= $_POST["blog"] ?><br>
Peminatan Karir: <?= $_POST["karir"] ?><br>
Motto: <?= $_POST["motto"] ?><br>
</body>
</html>