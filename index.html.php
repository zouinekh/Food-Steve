  
<?php
    require "CRUDProduit.php";
    $crud=new CRUDProduit();
    $res=$crud->findAll();
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>FOOD STEVE</title>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#home" class="nav__logo">FOOD STEVE</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                        <li class="nav__item"><a href="login.html" class="nav__link">Login</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title"> FOOD STEVE</h1>
                        <h2 class="home__subtitle">Try the best food of <br> the week.</h2>
                        <a href="#menu" class="button">View Menu</a>
                    </div>
    
                    <img src="assets/img/home.png" alt="" class="home__img">
                </div>
            </section>
            
            <!--========== ABOUT ==========-->
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">About us</span>
                        <h2 class="section-title about__initial">We cook the best <br> tasty food</h2>
                        <p class="about__description">We cook the best food in the entire city, with excellent customer service, the best meals and at the best price, visit us.</p>

                    </div>

                    <img src="assets/img/about.jpg" alt="" class="about__img">
                </div>
            </section>

          

            <!--========== MENU ==========-->
            <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">Special</span>
                <h2 class="section-title">Menu of the week</h2>
                
                <div class="menu__container bd-grid">
                <?php foreach($res as $produit): ?>
                <div class="menu__content">
                    
                        <img src="./assets/img/<?= $produit->img ?>" alt="" class="menu__img">
                        <h3 class="menu__name"><?= $produit->Nom?></h3>
                        <span class="menu__detail"><?= $produit->description?></span>
                        <span class="menu__preci">DT<?= $produit->prix ?></span>
                      <a  href="cart.html.php?id=<?=$produit->id?>" class='bx bx-cart-alt button menu__button'></a>
                    </div>
                    <?php endforeach; ?>
                </div>
                
            </section>


        <!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Tasty Food</a>
                    <span class="footer__description">Restaurant</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Services</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Delivery</a></li>
                        <li><a href="#" class="footer__link">Pricing</a></li>
                        <li><a href="#" class="footer__link">Fast food</a></li>
                        <li><a href="#" class="footer__link">Reserve your spot</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Information</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Event</a></li>
                        <li><a href="#" class="footer__link">Contact us</a></li>
                        <li><a href="#" class="footer__link">Privacy policy</a></li>
                        <li><a href="#" class="footer__link">Terms of services</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Adress</h3>
                    <ul>
                        <li>Fouchena - Ben Arous</li>
                        <li>Nahj El Ardh</li>
                        <li>20 - 014 - 811</li>
                        <li>steve@food.com</li>
                    </ul>
                </div>
            </div>

        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>