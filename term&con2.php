<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for proper character encoding and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tab icon -->
    <link rel="icon" href="images/logo1.png">

    <!-- Page title -->
    <title>Edu Flex</title>

    <!-- CSS links -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/term&con.css">
    <script type="text/javascript" src="js/search1.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    
   

    
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="home2.php"><img src="images/logo1.png" alt="EduFlex Logo" width="150px"></a>
            </div>
            <ul>
                <li><a href="home2.php">Home</a></li>
                <li><a href="aboutus2.php">About Us</a></li>
                <li><a href="program.php">Programs</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
            <div class="search-container">
            <input type="text" id="search-query" placeholder="Search">
            <button class="search-btn" onclick="performSearch()">Search</button>
</div>
<a href="edit.php?Id=$res_id" class="profile-link">Profile</a>
           <a href="logout.php?Id=$res_id"> <button class="log-out">Log Out</button></a>
        </div>
    </nav>
    <!-- Terms and Conditions Section -->
    <h1 class="topic">Terms and Conditions</h1>

    <div class="term-box">
        <div class="term-text">
            <p>Greetings Users,</p>
            <p>1. <strong>Acceptance of Terms:</strong> By accessing and using this eLearning platform (the "Website"),
                you agree to be bound by these Terms and Conditions, all applicable laws, and regulations. If you do not
                agree with any of these terms, you are prohibited from using or accessing this site.</p>
            <p>2. <strong>User Account:</strong> You agree to provide accurate and complete information when creating an
                account and to update your information as needed. You are responsible for all activities under your
                account.</p>
            <p>3. <strong>Use of Website:</strong> You must be at least 18 years old to use this Website, or under 18
                with supervision. The website may only be used for personal, non-commercial purposes.</p>
            <p>4. <strong>Payment and Fees:</strong> Certain courses may require payment. You agree to provide accurate
                payment information and authorize us to charge the applicable fees. Payments are processed securely.</p>
            <p>5. <strong>Course Content:</strong> All content is owned by or licensed to the Website. You may not
                redistribute any content without prior permission.</p>
            

            <!-- Accept or Decline Buttons -->
            
        </div>
    </div>

     <!-- Footer Section -->
     <footer>
    <div class="footer-container">
        <div class="contact-info">
            <ul>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="term&con2.php">Terms and Conditions</a></li>
                <li><a href="privacy2.php">Privacy Policy</a></li>
                <li><a href="faq2.php">FAQ</a></li>
            </ul>
            <p>
                <a href="mailto:eduflex@gmail.com">eduflex@gmail.com</a> |
                <a href="tel:+011xxxxxxx">011-xxxxxxx</a>
            </p>
            <div class="social-icons">
                <a href="#"><img style="width:20px" src="images/fb-icon.png"  alt="Facebook"></a>
                <a href="#"><img style="width:20px" src="images/linkedin-icon.jpg" alt="LinkedIn"></a>
                <a href="#"><img style="width:20px" src="images/youtube-icon.png" alt="YouTube"></a>
                <a href="#"><img style="width:20px" src="images/email-icon.jpg" alt="Email"></a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p><b>&copy; 2024 EduFlex. All rights reserved.</b></p>
    </div>
</footer>
</body>

</html>