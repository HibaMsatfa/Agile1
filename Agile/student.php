<?php include('config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ostadi</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header section starts -->
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>AYNA</span><i class="fa fa-graduation-cap"></i>STADI</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#how">How it Works</a>
            <a href="#contact">contact</a>
        </nav>
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <a href="#profile"><?php echo $_SESSION['FullName']; ?></a>
            <a href="login/logout.php"><i class="fas fa-sign-out-alt" id="logout-btn"></i></a>
        </div>
        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>
    <!-- header section ends -->

    <!-- login form container -->
    <div class="login-form-container">
        <i class="fas fa-times" id="form-close"></i>
        <form action="" method="POST">
            <h3>login</h3>
            <input type="email" name="email" class="box" placeholder="Enter your email">
            <input type="password" name="password" class="box" placeholder="Enter your password">
            <input type="submit" name="login" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forgot password? <a href="#">click here</a></p>
        </form>
    </div>

    <!-- home section starts -->
    <section class="home grd1 animate" id="home">
        <div class="image-content">
            <div class="content-item" id="content-1">
                <div class="content">
                    <a href="#" class="btn start">Get Started</a>
                </div>
            </div>
        </div>
        
        <div class="image-container">
            <img src="images/class-1.png" id="image-slider" alt="">
        </div>
    </section>
    <!-- home section ends -->

    <!-- contact section starts -->
    <section class="contact grd2 animate" id="contact">
        <h1 class="heading backy">
            <span>C</span>
            <span>O</span>
            <span>N</span>
            <span>T</span>
            <span>A</span>
            <span>C</span>
            <span>T</span>
        </h1>

        <div class="row">
            <div class="image">
                <img src="images/contact.jpg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="Number">
                    <input type="text" placeholder="Subject">
                </div>
                <textarea placeholder="Message" id="message" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="Send Message">
            </form>
        </div>
    </section>
    <!-- contact section ends -->

    <!-- footer section starts -->
    <section class="footer grd1">
        <h1 class="credit">Created by <span>Dizalj</span> | All Rights Reserved! </h1>
    </section>
    <!-- footer section ends -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>
</html>