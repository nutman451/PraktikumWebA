<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "style.php"; ?>
    <link rel="stylesheet" href="css/index.css">
    <title>Home</title>
</head>

<body>
    <div id="main-content">
        <?php include 'header-sidebar.php';?>
        <div id="isi">
            <h1>Selamat Datang</h1>
            <p style="text-align: justify;">Lorem Ipsum is simply dummy text of
              the printing and typesetting industry.when an unknown printer took
              a galley of type and scrambled it to make a type specimen book..</p>
            <h1>Galeri</h1>
            <p style="text-align: right; margin-top: -30px;"><a href="galeri.php"
                    style="text-decoration: none; color: #29aae3">Lihat lainnya...</a></p>
            <div class="galeri">
                <img src="gambar/book1.jpg" alt="">
                <p><a href="galeri.php"><button class="button">Lihat lebih lanjut</button></a></p>
            </div>
            <div class="galeri">
                <img src="gambar/book2.jpg" alt="">
                <p><a href="galeri.php"><button class="button">Lihat lebih lanjut</button></a></p>
            </div>

            <div class="galeri">
                <img src="gambar/book3.jpg" alt="">
                <p><a href="galeri.php"><button class="button">Lihat lebih lanjut</button></a></p>
            </div>
        </div>
        <div id="clear"></div>

    </div>
</body>

</html>
