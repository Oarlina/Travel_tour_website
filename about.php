<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    
    <!-- lien swipper css  -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> -->
    
    <!-- lien font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- lien ppage css-->
    <link rel="stylesheet" href="css/styles.css" />
 

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

    <div class="heading" style="background:url(images/header-bg-01.jpg) no-repeat">
        <h1>about us</h1>
    </div>

    <section class="about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima non illo recusandae officiis animi 
                esse magni vero saepe laudantium? Voluptas deleniti vel consectetur dolore tenetur magnam corporis 
                in rem aliquid!
            </p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque cum unde aliquam nulla et 
                blanditiis at architecto? Doloremque, delectus a?
            </p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, illo a corrupti 
                        placeat quo qui ipsum nihil alias repellat, laudantium aut! Eveniet, similique atque! 
                        Illum laboriosam distinctio blanditiis beatae at.
                    </p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="images/pic-1.jpg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, illo a corrupti 
                        placeat quo qui ipsum nihil alias repellat, laudantium aut! Eveniet, similique atque! 
                        Illum laboriosam distinctio blanditiis beatae at. Lorem ipsum dolor sit amet, 
                        consectetur adipisicing elit. Labore, minus?
                    </p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="images/pic-2.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, illo a corrupti 
                        placeat.
                    </p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="images/pic-3.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, illo a corrupti 
                        placeat quo qui ipsum nihil alias repellat, laudantium aut! Eveniet, similique atque! 
                        Illum laboriosam distinctio blanditiis beatae at.
                    </p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="images/pic-4.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, illo a corrupti 
                        placeat quo qui ipsum nihil alias repellat, laudantium aut! Eveniet, similique atque!.
                    </p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="images/pic-5.png" alt="">
                </div>
            </div>
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