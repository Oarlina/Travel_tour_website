<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    
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

    <div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
        <h1>book</h1>
    </div>

    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name:</span>
                    <input type="text" placeholder="entrer your name" name="name">
                </div>

                <div class="inputBox">
                    <span>email:</span>
                    <input type="email" placeholder="entrer your email" name="email">
                </div>

                <div class="inputBox">
                    <span>phone:</span>
                    <input type="number" placeholder="entrer your number" name="phone">
                </div>

                <div class="inputBox">
                    <span>address:</span>
                    <input type="text" placeholder="entrer your address" name="address">
                </div>

                <div class="inputBox">
                    <span>where to:</span>
                    <input type="number" placeholder="place you want to visit" name="location">
                </div>
                
                <div class="inputBox">
                    <span>how many:</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>

                <div class="inputBox">
                    <span>arrivals:</span>
                    <input type="date" name="arrivals">
                </div>

                <div class="inputBox">
                    <span>leaving:</span>
                    <input type="date" name="leaving">
                </div>
                <input type="submit" value="submit" class="btn" name="send">
            </div>
        </form>
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