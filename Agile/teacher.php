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
        <!-- Display logged-in header -->
        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>AYNA</span><i class="fa fa-graduation-cap"></i>STADI</a>
        <nav class="navbar">
            <a href="#absence">Report Absence</a>
            <a href="#contact">Contact</a>
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

    <!-- absence section starts -->
    <section class="absence grd1 animate" id="absence">
        <h1 class="heading backy">
            <span>W</span>
            <span>H</span>
            <span>E</span>
            <span>N</span>
            <span class="space"></span>
            <span>A</span>
            <span>B</span>
            <span>S</span>
            <span>E</span>
            <span>N</span>
            <span>T</span>
        </h1>

        <div class="row">

            <form action="">
                <div class="inputBox">
                    <h3>Instructor Name</h3>
                    <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="inputBox">
                    <h3>Instructor ID</h3>
                    <input type="text" placeholder="Enter your ID" required>
                </div>
                <div class="inputBox">
                    <h3>Course</h3>
                    <input type="text" placeholder="Enter the class" required>
                </div>
                <div class="inputBox">
                    <h3>From</h3>
                    <input type="date" id="startDate">
                </div>
                <div class="inputBox">
                    <h3>Starting Hour</h3>
                    <input type="time" value="09:00">
                </div>
                <div class="inputBox">
                    <h3>To</h3>
                    <input type="date" id="endDate">
                </div>
                <div class="inputBox">
                    <h3>Ending Hour</h3>
                    <input type="time" value="10:00">
                </div>
                <div class="inputBox">
                    <h3>Reason</h3>
                    <input type="text" placeholder="why?" required>
                </div>
                <input type="submit" class="btn" value="Validate">
            </form>

            <div class="image">
                <img src="images/owl.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- absence section ends -->

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

</body>
</html>