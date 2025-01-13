<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    
    <!-- lien swipper css  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    <!-- lien font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- lien ppage css-->
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
        
    <section class="header"> <!-- c'est la section ou il y a les liens des pages-->
        <a href="home.php" class="logo">Travel.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div> <!-- ceci est le boputon du menu -->
    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque enim 
                inventore quis praesentium laudantium quo magnam, nulla a exercitationem 
                magni, molestias ipsum sint ullam? Sit provident quisquam repudiandae 
                ratione impedit.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>

    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, officia!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, officia!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, officia!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>

        <div class="load-more">
            <a href="package.php" class="btn">load more</a>
        </div>

    </section>

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae rerum fuga molestiae vitae
                 sequi optio amet esse accusantium inventore reprehenderit.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>

    <section class="footer"> <!-- c'est la section ou il y a les liens du site-->
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
            </div>
            
            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>
            
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> mumbai, india -400104</a>
            </div>
            
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook"></i>facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>
        </div>

        <div class="credit"> <!-- c'est le copywrith-->
            created by <span>mr.web designer </span> | all rights reserved!
        </div>

    </section>

    <!-- lien swipper js  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="index.js"></script>
</body>
</html>