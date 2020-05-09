<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'admin'){
        header('Location: ../pegawai/kontak.php');
      }
    }
    else{
      header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div id="batas">
        <div id="atas">
            <img src="../img/banner.jpg" alt="">
            <p>Perpustakaan Universitas Udayana</p>
        </div>
        <div id="sidebar">
            <img src="../img/logo.png" alt="">
            <div class="populer">
                <p>Artikel Populer</p>
            </div>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="tentang.php">TENTANG</a></li>
                    <li><a href="galeri.php">GALERI</a></li>
                    <li><a href="kontak.php">KONTAK</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>

        </div>
        <div id="menu">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="tentang.php">TENTANG</a></li>
                <li><a href="galeri.php">GALERI</a></li>
                <li><a href="kontak.php">KONTAK</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div id="isi">
            <h1>Kontak Kami</h1>
            <nav>
                <ul>
                    <li>Nama</li>
                    <li>Nim</li>
                    <li>No. Hp</li>
                </ul>
                <ul>
                    <li>Benedict</li>
                    <li>1708561003</li>
                    <li>081239989135</li>
                </ul>
            </nav>
            <br><br>
            <div class="kontak">
                <form action="#">
                    <label for="fname">Nama Depan</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Nama Belakang</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="country">Country</label>
                    <select id="country" name="country">
                      <option value="Indonesia">Indonesia</option>
                      <option value="Inggris">Inggris</option>
                      <option value="Jepang">Jepang</option>
                    </select>
                    <label for="subject">Masukan atau Komentar</label>
                    <textarea id="subject" name="subject" placeholder="Masukan kalimat.." style="height:200px"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Benedict</p>
        </div>

    </div>
</body>
</html>
