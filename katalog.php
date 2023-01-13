<?php
session_start();
$conn = new mysqli("localhost", "root", "","omlet_db");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="shortcut icon" href="image/omlet.png" type="">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <title>Katalog Omlet</title>
    <link rel="stylesheet" href="style-katalog.css">

</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Omlet</label>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="katalog.php">Katalog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="keranjang.php" class="btn btn-success position-relative rounded-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z">
                        </path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                </a>


            </li>
            <li><a href="logout.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </a></li>

        </ul>
    </nav>

    <section class="gallery">
        <div class="content">
            <div class="row">
                <div class="col-md-3">
                <?php $ambil = $conn->query("SELECT * FROM produk"); ?>
                <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                <img src="image/<?php echo $perproduk['foto_produk']; ?>">
                <h3><?php echo $perproduk['nama_produk']; ?></h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, repudiandae ea earum tenetur dolorem
                    facilis aut, odit totam aperiam numquam repellendus. Ea sunt corporis repellendus odio eos eius
                    doloremque aliquid.
                </p>
                <h6>Rp.<?php echo number_format($perproduk['harga_produk']); ?></h6>

                <td>
                    <a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>">
                    <button class="buy-1">Buy Now</button>
                    </a>
                </td>
                <?php } ?>
                </div>
            </div>
    </section>

    <!-- <div class="gallery">
        <div class="content">
            <img src="image/ks1.png">
            <h3>Kaos Polos</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Pariatur, repudiandae ea earum tenetur dolorem
                facilis aut, odit totam aperiam numquam repellendus.
                Ea sunt corporis repellendus odio eos eius
                doloremque aliquid.
            </p>
            <h6>Rp80.000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <td>
                <a href="keranjang.php">
                <button class="buy-1">Buy Now</button>
                </a>
            </td>
        </div>

        <div class="content">
            <img src="image/ks4.png">
            <h3>Kaos Polo</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Pariatur, repudiandae ea earum tenetur dolorem
                facilis aut, odit totam aperiam numquam repellendus.
                Ea sunt corporis repellendus odio eos eius
                doloremque aliquid.
            </p>
            <h6>Rp100.000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <td>
                <a href="keranjang.php">
                <button class="buy-2">Buy Now</button>
                </a>
            </td>
        </div>

        <div class="content">
            <img src="image/PDL.png">
            <h3>PDL</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Pariatur, repudiandae ea earum tenetur dolorem
                facilis aut, odit totam aperiam numquam repellendus.
                Ea sunt corporis repellendus odio eos eius
                doloremque aliquid.
            </p>
            <h6>Rp150.000</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <td>
                <a href="keranjang.php">
                <button class="buy-3">Buy Now</button>
                </a>
            </td>
        </div>

        

    </div> -->
</body>
<footer>
    <div class="footer-content">
        <h3>Omlet Production</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Corrupti a optio quisquam magnam dolorum sint
            quidem eius eos fugiat saepe reprehenderit consectetur,
            consequatur, quaerat, voluptatum assumenda
            consequuntur quae delectus accusamus?</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-linked-square"></i></a>
            </li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2022 OmletProduction. designed by
            <span>Omlet Team</span>
        </p>
    </div>
</footer>

</html>