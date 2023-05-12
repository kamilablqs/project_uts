<?php
require_once '../database/dbkoneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../backend/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Bilqis Fashion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#shop">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="../backend/index.php">Admin</a></li>
                </ul>

                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg> -->
                <img style="opacity: 0.6;" src="assets/cover-2.jpg" width="100%" height="100%" alt="">
                <div class="container">
                    <div class="carousel-caption text-start text-center text-dark">
                        <h1 class="display-4 fw-bolder">Bilqis Fashion</h1>
                        <p id="about" class="lead fw-normal text-dark-50 mb-0">Hai Bilqis'em, Welcome to Bilqis Fashion
                            Online
                            Store! Fashion shop wanita no 1 di Indonesia, Bilqis Fashion online store adalah akun resmi
                            dari
                            Bilqis Fashion
                            Kami menyediakan produk fashion wanita berupa kemeja, kaos, blouse, hijab, dan lain-lain
                            Semua produk didesain bergaya elegan sehingga nyaman digunakan
                            Termukan outfit terbaikmu di sini!
                            Jam operasional
                            Setiap hari: pukul 09.00 – 16.00 WIB
                            Pengiriman: Senin – Sabtu</p>
                        <p><a class="btn btn-lg btn-primary mt-4" href="form_pemesanan.php">Buy Now!</a></p>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <?php
    $sql = "SELECT * FROM pakaian";
    $rs = $dbh->query($sql);
    ?>

    <!-- Section-->
    <section id="shop" class="py-5">

        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
                foreach ($rs as $row) {
                ?>
                <div class="col mb-5">
                    <div class="card">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../frontend/assets/hijab.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?= $row['nama'] ?></h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">Rp.100.000</span>
                                <?= $row['harga'] ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-pink">
        <div class="container">
            <p class="m-0 text-center text-biru">
                Copyright &copy; Your Website 2023
            </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>