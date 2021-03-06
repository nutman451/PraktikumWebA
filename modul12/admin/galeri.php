<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'admin'){
        header('Location: ../pegawai/galeri.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <h1>Galeri</h1>
            <form class="example" action="#">
                <input type="text" placeholder="Cari Buku..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Shadow of the Conqueror</p>
                    <p>Shad M. Brooks</p>
                    <nav>
                        <ul>
                            <li>Jumlah Halaman</li>
                            <li>Tanggal Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                            <li>Lebar</li>
                            <li>Panjang</li>
                        </ul>
                        <ul>
                            <li>504.0</li>
                            <li>1 Juli 2019</li>
                            <li>0648572919</li>
                            <li>English</li>
                            <li>Shadiversity Pty Ltd</li>
                            <li>0.6 kg</li>
                            <li>12.7 cm</li>
                            <li>20.32 cm</li>
                        </ul>
                        <button class="button">Pinjam</button>
                    </nav>
                </div>
                <img src="../img/book1.jpg" alt="">
            </div>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Can Openers</p>
                    <p>Nicholas Moran</p>
                    <nav>
                        <ul>
                            <li>Jumlah Halaman</li>
                            <li>Tanggal Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                            <li>Lebar</li>
                            <li>Panjang</li>
                        </ul>
                        <ul>
                            <li>240.0</li>
                            <li>24 Nov 2017</li>
                            <li>1635618592</li>
                            <li>English</li>
                            <li>Echo Point </li>
                            <li>1.45 kg</li>
                            <li>34.29 cm</li>
                            <li>24.13 cm</li>
                        </ul>
                        <button class="button">Pinjam</button>
                    </nav>

                </div>
                <img src="../img/book2.jpg" alt="">
            </div>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Geografi Pariwisata Jawa Bali</p>
                    <p>Arief F. Rachman</p>
                    <nav>
                        <ul>
                            <li>Jumlah Halaman</li>
                            <li>Tanggal Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                            <li>Lebar</li>
                            <li>Panjang</li>
                        </ul>
                        <ul>
                            <li>308.0</li>
                            <li>Mar 2014</li>
                            <li>9786027757110</li>
                            <li>Indonesia</li>
                            <li>Media Bangsa </li>
                            <li>0.5 kg</li>
                            <li>- cm</li>
                            <li>- cm</li>
                        </ul>
                        <button class="button">Pinjam</button>
                    </nav>

                </div>
                <img src="../img/book3.jpg" alt="">
            </div>
            <div><center><button class="button">Tampilkan Lebih Banyak</button></center></div>
            <br>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Benedict</p>
        </div>

    </div>
</body>
</html>
