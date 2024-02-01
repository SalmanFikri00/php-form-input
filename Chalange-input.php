<?php 
    $namaErr = $ttlErr = $emailErr = '*';
    $nama = $ttl =   $tempat = $agama = $alamat = $email = $nohp = $sekolah = $kelas = $blog = $karir = $motto = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if(!$_POST["nama"]){
            $namaErr = '* nama harus di isi';
        }

        if(!$_POST["email"]){
            $emailErr = '* Email harus di isi';
        }

        if(!$_POST['ttl']){
            $ttlErr ='* ttl harus di isi';
        }

        if( $ttlErr == $emailErr || $emailErr == $namaErr){

            $nama = $_POST["nama"] ;
            $ttl = $_POST["ttl"];
            $alamat = $_POST["alamat"];
            $email = $_POST["email"];
            $agama = $_POST["agama"];
            $nohp = $_POST["nohp"];
            $sekolah = $_POST["sekolah"];
            $kelas = $_POST["kelas"];
            $blog = $_POST["blog"];
            $karir = $_POST["karir"];
            $motto =  $_POST["motto"];
        }
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Alkatra:wght@400;600&family=Caveat:wght@400;500;600&family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900&family=Montserrat:ital,wght@0,200;0,300;0,500;0,600;0,800;1,900&family=Poppins:wght@200;400;500;700&family=Quicksand:wght@300;500;700&family=Raleway:wght@300;400;500&family=Roboto:wght@100;300;400;500;700;900&family=Rubik:ital,wght@0,300;0,400;0,500;1,400&family=Ubuntu:wght@300;500&display=swap');

*{
    margin: 0;
    padding: 0;
    font-family: "Ubuntu", sans-serif;
}

body {
    max-width: 100vw;
    overflow-x: hidden;
}

section {
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: space-evenly;

}

label {
    width: 200px;
}

section div {
    border: .2px solid black;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 10px 10px 20px rgba(0, 0, 0, .15);
}

input {
    padding: 5px 10px;
    font-size: 10px;
    border-radius: 20px;
    border: 1px solid black;
}

p{
    padding: 2px;
    font-weight: 300;
    font-size: 10px;
}

</style>
<body>
    <section>
        <div>
            <h2>Input Data</h2>
            <h2>=============</h2>
            <br>
            <form action="" method="post">
                <p><span><label for="nama"> Nama: </label></span> <input type="text" id="nama" name="nama"> <span style="color: red;"><?= $namaErr ?></span></p>
                <p><span><label for="ttl">Tempat, Tgl.Lahir: </label></span><input id="ttl" type="text" name="ttl"><span style="color: red;"><?= $ttlErr ?></span></p>
                <p><span><label for="alamat">Alamat: </label></span><input id="alamat" type="text" name="alamat"></p>
                <p><span><label for="email">Email: </label></span><input id="email" type="text" name="email"><span style="color: red;"><?= $emailErr ?></span></p>
                <p><span><label for="agama">Agama: </label></span><input id="agama" type="text" name="agama"></p>
                <p><span><label for="nohp"> No. HP: </label></span><input id="nohp" type="number" name="nohp"></p>
                <p><span><label for="sekolah">Sekolah:</label></span> <input id="sekolah" type="text" name="sekolah"></p>
                <p><span><label for="kelas">Kelas: </label></span><input id="kelas" type="text" name="kelas"></p>
                <p><span><label for="blog">Blog: </label></span><input id="blog" type="text" name="blog"></p>
                <p><span><label for="karir"> Peminatan Karir: </label></span><input id="karir" type="text" name="karir"></p>
                <p><span><label for="motto"> Motto: </label></span><input id="motto" type="text" name="motto"></p>
                <br>
                <input type="submit">
            </form>
        </div>
        <div>
            <h2>Berikut Data Yang Anda Input</h2>
            <h2>=============</h2>
            <br>
            <p>Nama: <?= $nama ?></p>
            <p>Tempat, Tgl.Lahir : <?= $ttl ?></p>
            <p>Alamat: <?= $alamat ?></p>
            <p>Email: <?= $email ?></p>
            <p>Agama: <?= $agama ?></p>
            <p>No. HP: <?= $nohp ?></p>
            <p>Sekolah: <?= $sekolah ?></p>
            <p>Kelas: <?= $kelas ?></p>
            <p>Blog: <?= $blog ?></p>
            <p>Peminatan Karir: <?= $karir ?></p>
            <p>Motto: <?=$motto ?></p>
        </div>
    </section>
</body>
</html>