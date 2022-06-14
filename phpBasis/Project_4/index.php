<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KEK</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main_style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lightslider.css"/>
    <script type="text/javascript" src="assets/js/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="assets/js/lightslider.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/products-slider-animation.js"></script>
</head>
<body>

<header class='nav-scrolled'>
    <nav style="margin: auto; align-content: center">
        <ul class="nav-links right-part-links">
            <div class="hamburger-menu">
                <input id="menu-toggle" type="checkbox" style="z-index: 999"/>
                <label class="menu-btn" for="menu-toggle" style="z-index: 999">
                    <span style="z-index: 999"></span>
                </label>

                <ul class="menu-box">
                    <li><a class="menu-item" href="index.php">Home</a></li>
                    <li><a class="menu-item" href="catalogue.php">Catalogue</a></li>
                    <li><a class="menu-item" href="delivery.php">Delivery</a></li>
                    <li><a class="menu-item" href="contact.php">Contact</a></li>
                    <li><a class="menu-item" href="about.php">About</a></li>
<!--                    <li><a class="menu-item" href="login.php">Login</a></li>-->
                    <li><a class="menu-item" href="login.php">
                            <?php
                            if ($_COOKIE['user'] == ''):
                                ?>
                                Login
                            <?php else: ?>
                                Log Out
                            <?php endif; ?>
                        </a></li>
                </ul>
            </div>
            <li><a href="catalogue.php" class="icon catalog-icon"></a></li>
        </ul>
        <div class="logo">
            <h4 style="margin-top: 2%">želtas</h4>
        </div>
        <ul class="nav-links left-part-links">
            <li><a href="#" class="icon search-icon"></a></li>
            <li><a href="#" class="icon basket-icon"></a></li>
        </ul>
    </nav>
</header>

<div class="body-class">
    <div id="Into" class="Intro">
        <div class="container">
            <input type="radio" name="slider" id="item-1" checked>
            <input type="radio" name="slider" id="item-2">
            <input type="radio" name="slider" id="item-3">
            <div class="cards">
                <label class="card" for="item-1" id="song-1">
                    <h1>WOLF</h1>
                    <div class="rings">
                        <div class="big-ring">
                            <div class="small-ring">
                                <img style="width: 90%; height: auto;" src="assets/images/jewelry/wolf_neckle.png" alt="Wolf">
                            </div>
                        </div>
                    </div>
                </label>
                <label class="card" for="item-2" id="song-2">
                    <h1>BRACELET</h1>
                    <div class="rings">
                        <div class="big-ring">
                            <div class="small-ring">
                                <img src="assets/images/jewelry/bracelet_dragon.png" alt="Bracelet">
                            </div>
                        </div>
                    </div>
                </label>
                <label class="card" for="item-3" id="song-3">
                    <h1>CAT</h1>
                    <div class="rings">
                        <div class="big-ring">
                            <div class="small-ring">
                                <img src="assets/images/jewelry/sculpture_cat.png" alt="Cat">
                            </div>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </div>
    <div id="Intro-mobile">
        <div class="card-mobile">
            <h1>Mice</h1>
            <div class="rings">
                <div class="big-ring-mb">
                    <div class="small-ring-mb">
                        <img src="assets/images/jewelry/mice1.png" alt="Wolf">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="Article-part wave-pattern">
        <div class="right-col">
            <img src="assets/images/photos/article_img.jpg">
        </div>
        <div class="left-col">
            <div class="article-col">
                <div class="text-section">
                    <h1 class="pd-b-30">Jewelry with soul</h1>
                    <p>Since ancient times people wear amuletes, rings and bracelets. to show their indivuality,
                        religious belief and social status. Were thought that these pieces give protection and inspire
                        confidence, adorn men and women.
                    </p>
                </div>
                <div class="about-button">
                    <a href="about.php" target="_blank">
                        <div class="about-button-wrapper">
                            <svg class="" width="87" height="87" viewBox="0 0 87 87" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.8"
                                      d="M43.1685 84.8809L72.221 72.758L84.609 43.1814L73.0318 14.7162L43.1685 2"
                                      stroke="#C7AB9B" stroke-width="1.5" stroke-miterlimit="10"/>
                                <path opacity="0.8"
                                      d="M43.4404 84.8809L14.388 72.758L1.99998 43.1814L13.5771 14.7162L43.4404 2"
                                      stroke="#C7AB9B" stroke-width="1.5" stroke-miterlimit="10"
                                      stroke-dasharray="6 6"/>
                                <path d="M58.2954 27.6604L54.2129 27.6604L54.2129 31.7429L58.2954 31.7429L58.2954 27.6604ZM29.5913 57.0716L30.9422 55.7208L30.2351 55.0136L28.8842 56.3645L29.5913 57.0716ZM33.6438 53.0191L36.3454 50.3175L35.6383 49.6104L32.9367 52.312L33.6438 53.0191ZM39.0471 47.6158L41.7487 44.9142L41.0416 44.2071L38.34 46.9087L39.0471 47.6158ZM44.4503 42.2126L47.152 39.5109L46.4449 38.8038L43.7432 41.5055L44.4503 42.2126ZM49.8536 36.8093L52.5552 34.1077L51.8481 33.4006L49.1465 36.1022L49.8536 36.8093ZM55.2569 31.406L56.6077 30.0552L55.9006 29.3481L54.5498 30.6989L55.2569 31.406ZM60.3366 25.6192L52.1717 25.6192L52.1717 33.7842L60.3366 33.7842L60.3366 25.6192ZM29.9449 57.4251L31.2957 56.0743L29.8815 54.6601L28.5307 56.0109L29.9449 57.4251ZM33.9974 53.3727L36.699 50.671L35.2848 49.2568L32.5831 51.9585L33.9974 53.3727ZM39.4006 47.9694L42.1023 45.2678L40.688 43.8536L37.9864 46.5552L39.4006 47.9694ZM44.8039 42.5661L47.5055 39.8645L46.0913 38.4503L43.3897 41.1519L44.8039 42.5661ZM50.2072 37.1629L52.9088 34.4612L51.4946 33.047L48.7929 35.7487L50.2072 37.1629ZM55.6104 31.7596L56.9612 30.4088L55.547 28.9946L54.1962 30.3454L55.6104 31.7596Z"
                                      fill="#A38D7F"/>
                            </svg>

                            <p>About Us</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="Product-slider">
        <div class="container-products">
            <ul id="autoWidth" class="">
                <div class="item-1 product-box product-bg-fade">
                    <h2 class="product-title">Figurine Owl</h2>
                    <img class="product-item" src="assets/images/jewelry/sculpture_owl.png">
                    <div class="details">
                        <div class="left-col-pr">
                            <p>Miniature sculptures</p>
                            <h1>Miniature Figurine Owl</h1>
                        </div>
                        <div class="right-col-pr center">
                            <h2 class="price">$30</h2>
                            <div class="product-button"></div>
                        </div>
                    </div>
                </div>
                <div class="item-2 product-box product-bg-fade">
                    <h2 class="product-title">Viking bracelet</h2>
                    <img class="product-item" src="assets/images/jewelry/ring_viking.png">
                    <div class="details">
                        <div class="left-col-pr">
                            <p>Miniature sculptures</p>
                            <h1>Miniature Figurine Owl</h1>
                        </div>
                        <div class="right-col-pr center">
                            <h2 class="price">$45</h2>
                            <div class="product-button"></div>
                        </div>
                    </div>
                </div>
                <div class="item-3 product-box product-bg-fade">
                    <h2 class="product-title">Viking bracelet</h2>
                    <img class="product-item" src="assets/images/jewelry/bracelet_viking.png">
                    <div class="details">
                        <div class="left-col-pr">
                            <p>Miniature sculptures</p>
                            <h1>Miniature Figurine Owl</h1>
                        </div>
                        <div class="right-col-pr center">
                            <h2 class="price">$46</h2>
                            <div class="product-button"></div>
                        </div>
                    </div>
                </div>
                <div class="item-4 product-box product-bg-fade">
                    <h2 class="product-title">Viking bracelet</h2>
                    <img class="product-item" src="assets/images/jewelry/mice1.png">
                    <div class="details">
                        <div class="left-col-pr">
                            <p>Miniature sculptures</p>
                            <h1>Miniature Figurine Owl</h1>
                        </div>
                        <div class="right-col-pr center">
                            <h2 class="price">$33</h2>
                            <div class="product-button"></div>
                        </div>
                    </div>
                </div>
                <div class="item-5 product-box product-bg-fade">
                    <h2 class="product-title">Viking bracelet</h2>
                    <img class="product-item" src="assets/images/jewelry/wolf_neckle.png">
                    <div class="details">
                        <div class="left-col-pr">
                            <p>Miniature sculptures</p>
                            <h1>Miniature Figurine Owl</h1>
                        </div>
                        <div class="right-col-pr center">
                            <h2 class="price">$28</h2>
                            <div class="product-button"></div>
                        </div>
                    </div>
                </div>
                <div class="item-6 product-box product-bg-fade">
                    <h2 class="product-title">Viking bracelet</h2>
                    <img class="product-item" src="assets/images/jewelry/bracelet_dragon.png">
                    <div class="details">
                        <div class="left-col-pr">
                            <p>Miniature sculptures</p>
                            <h1>Miniature Figurine Owl</h1>
                        </div>
                        <div class="right-col-pr center">
                            <h2 class="price">$36</h2>
                            <div class="product-button"></div>
                        </div>
                    </div>
                </div>
                <div class="item-7 product-box product-bg-fade">
                    <h2 class="product-title">Viking bracelet</h2>
                    <img class="product-item" src="assets/images/jewelry/bracelet_viking.png">
                    <div class="details">
                        <div class="left-col-pr">
                            <p>Miniature sculptures</p>
                            <h1>Miniature Figurine Owl</h1>
                        </div>
                        <div class="right-col-pr center">
                            <h2 class="price">$42</h2>
                            <div class="product-button"></div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </section>
</div>
<?php
require "includes/intro-footer.php";
?>

<script>
    $(document).ready(function () {
        $(".product-box").hover(
            function () {
                $(this).addClass('product-bg-appear');
                $(this).removeClass('product-bg-fade');
                $(this).find('.details').stop(true, true).css({'opacity': '1'})
                $(this).find('.product-title').stop(true, true).css({'opacity': '.7'})
            },
            function () {
                $(this).addClass('product-bg-fade');
                $(this).removeClass('product-bg-appear');
                $(this).find('.details').stop(true, true).css({'opacity': '.2'})
                $(this).find('.product-title').stop(true, true).css({'opacity': '.2'})
            }
        );
    });
</script>
<script>
    const header = document.querySelector('header');

    const sectionIntro = $(window).width() <= 450 ? document.querySelector('#Intro-mobile') :
        document.querySelector('.Intro');


    const sectionObserved = new IntersectionObserver(
        function (entries, sectionObserved) {
            entries.forEach(entry => {
                if(!entry.isIntersecting) {
                    header.classList.add('nav-scrolled');
                } else {
                    header.classList.remove('nav-scrolled')
                }
            })
        },  {
            rootMargin: '-500px 0px 0px 0px'
        }
    );

    sectionObserved.observe(sectionIntro);
</script>

</body>
</html>

