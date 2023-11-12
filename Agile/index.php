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
        <!-- Display initial header for logged-out users -->
        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>AYNA</span><i class="fa fa-graduation-cap"></i>STADI</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#features">Features</a>
            <a href="#how">How it Works</a>
            <a href="#review">Testimonials</a>
            <a href="#contact">contact</a>
        </nav>
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
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
    <?php

if (isset($_POST['login'])) { // Check if the login button is clicked
    // Get user input and sanitize it
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // SQL to check if the username with the hashed password exists
    $sql = "SELECT * FROM student WHERE email = '$email' AND password = '$password'";

    // Execute the query
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        // User available
        $_SESSION['login'] = "Login Successfully!";
        $row = mysqli_fetch_assoc($res);
        $FullName = $row['FullName'];
        // Store the full_name in the session or any other variable as needed
        $_SESSION['FullName'] = $FullName;
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $email; // Store the user's email in the session
        header("Location: student.php");
    } else {
        $sql1 = "SELECT * FROM teacher WHERE email = '$email' AND password = '$password'";
        $res1 = mysqli_query($conn, $sql1);
        $count1 = mysqli_num_rows($res1);
        if ($count1 == 1) {
            // User available
            $_SESSION['login'] = "Login Successfully!";
            $row1 = mysqli_fetch_assoc($res1);
            $FullName = $row1['FullName'];
            // Store the full_name in the session or any other variable as needed
            $_SESSION['FullName'] = $FullName;
            $_SESSION['user'] = $email; // Store the user's email in the session
            $_SESSION['logged_in'] = true;
            header("Location: teacher.php");
        }
        else{
            $_SESSION['login'] = "Username or Password did not Match!";
        }
    }
}
?>
    <!-- home section starts -->
    <section class="home grd1 animate" id="home">
        <div class="image-content">
            <div class="content-item" id="content-1">
                <div class="content">
                    <a href="#" class="btn start">Get Started</a>
                </div>
            </div>
            <div class="content-item" id="content-2">
                <div class="content">
                    <a href="#" class="btn start">Got you Covered</a>
                </div>
            </div>
            <div class="content-item" id="content-3">
                <div class="content">
                    <a href="#" class="btn start">United we Stand</a>
                </div>
            </div>
        </div>

        <div class="controls">
            <div class="img-btn slide active" data-src="images/class-1.png"></div>
            <div class="img-btn slide" data-src="images/class-2.png"></div>
            <div class="img-btn slide" data-src="images/class-3.jpg"></div>
        </div>
        
        <div class="image-container">
            <img src="images/class-1.png" id="image-slider" alt="">
        </div>
    </section>
    <!-- home section ends -->

    <!-- about section starts -->
    <section class="about grd2 animate" id="about">
        <h1 class="heading backy">
            <span>A</span>
            <span>B</span>
            <span>O</span>
            <span>U</span>
            <span>T</span>
            <span class="space"></span>
            <span>U</span>
            <span>S</span>
        </h1>
        <div class="row">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>What makes us special?</h3>
                <p>Ayna Ostadi is our canvas for reimagining education. 
                    We are on a mission to transform the pursuit of knowledge into a thrilling adventure, available to everyone. <br>
                    When a teacher is absent or you have nothing to do, we see not a gap, but a doorway to exploration, empowerment, and enlightenment. 
                    Ayna Ostadi is not just a platform; it is a testament to the limitless possibilities where technology, empathy, and education converge...</p>
                    <div class="btn lefty">Join us</div>
            </div>
        </div>
    </section>
    <!-- about section ends -->

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

    <!-- features section starts -->
    <section class="features grd2 animate" id="features">
        <h1 class="heading backy">
            <span>F</span>
            <span>E</span>
            <span>A</span>
            <span>T</span>
            <span>U</span>
            <span>R</span>
            <span>E</span>
            <span>S</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/f1.jpg" alt="">
                <h3>24/7 Notification</h3>
                <p>"Ayna Ostadi" keeps you informed with instant professor absence notifications, allowing you to focus on productive learning and avoid unnecessary disruptions.</p>
            </div>
            <div class="box">
                <img src="images/owl.jpg" alt="">
                <h3>Hassle-free Reporting</h3>
                <p>Promote hassle-free reporting, since professors can report absences with just a few clicks, simplifying administrative tasks and saving valuable time.</p>
            </div>::
            <div class="box">
                <img src="images/f2.jpg" alt="">
                <h3>Time Saving</h3>
                <p>Avoid unnecessary trips to class and make the most of your valuable study time after receiving instant notifications when your professor reports an absence.</p>
            </div>
            <div class="box">
                <img src="images/f4.jpg" alt="">
                <h3>Personal Growth</h3>
                <p>Access a wide range of online courses, and resources (following your interests), enabling you to use absence time for personal growth and skill development.</p>
            </div>
            <div class="box">
                <img src="images/f5.jpg" alt="">
                <h3>Smart Alternatives</h3>
                <p>Ayna Ostadi suggests alternative classes or learning modules when a professor reports an absence, ensuring continuous learning and adaptability.</p>
            </div>
            <div class="box">
                <img src="images/f6.jpg" alt="">
                <h3>Easy Integration</h3>
                <p>Seamless integration with existing educational tools and systems, making it effortless for institutions to adopt the platform.</p>
            </div>
        </div>
    </section>
    <!-- features section ends -->

    <!-- review section starts -->
    <section class="review grd1 animate" id="review">

        <h1 class="heading backy">
            <span>T</span>
            <span>E</span>
            <span>S</span>
            <span>T</span>
            <span>I</span>
            <span>M</span>
            <span>O</span>
            <span>N</span>
            <span>I</span>
            <span>A</span>
            <span>L</span>
            <span>S</span>
        </h1>

        <div class="swiper review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic1.png" alt="">
                        <h3>Ismail Alj</h3>
                        <p>Ayna Ostadi turned class absences into moments of growth. 
                            It's like having a personal educational guide. 
                            Thank you for making my learning journey richer and more meaningful.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic2.png" alt="">
                        <h3>Biboon Salih</h3>
                        <p>Ayna Ostadi has streamlined our education system. 
                            It ensures continuity in learning and enhances the overall educational experience. 
                            It's a vital component in our mission for excellence.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic3.png" alt="">
                        <h3>Sara Sarsour</h3>
                        <p>Ayna Ostadi has made me a perpetual student. 
                            It keeps me engaged, curious, and growing in my chosen fields. 
                            It's a lifeline to knowledge and personal development.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic4.jpeg" alt="">
                        <h3>Hiba Alaoui</h3>
                        <p>Ayna Ostadi is like a secret weapon for me.
                            It transforms missed classes into self-driven learning opportunities. 
                            It keeps my curiosity alive and my education thriving.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic5.png" alt="">
                        <h3>Aisha Hachimi</h3>
                        <p>As an educator, Ayna Ostadi has been a valuable tool.
                            It helps bridge the gap when I can't be there and empowers students to continue learning.
                            It's a supportive partner in the classroom.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic3.png" alt="">
                        <h3>Hiba Kind</h3>
                        <p>Ayna Ostadi has given me peace of mind as a parent. 
                            It ensures my child's education never stops, even when their teacher is absent. 
                            It's a game-changer in our family's learning journey.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- review section ends -->
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