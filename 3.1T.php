<!DOCTYPE html>
<html lang="en">

<head>
    <!--to specify the character encoding of the document-->
    <meta charset="UTF-8">
        <!--to match the the device's width and set initial zoom level to 1.0-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--enter the logo as icon on the tab-->
        <link rel="icon" href="images/logo1.png">
        <!--name of the tab-->
        <title>Edu Flex</title>
        <!--link the css file with the header css-->
        <link rel="stylesheet" href="css/header.css">
        <!--link the css file with the footer css-->
        <link rel="stylesheet" href="css/footer.css">
         <!--link the css file with the program css-->
         <link rel="stylesheet" href="css/1.css">
        <!--font awesome link for the header is obtained from cdnjs.com site. then type font awesome. them copy the htl code inside </>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="about us/aboutus.js" defer></script>
        <script type="text/javascript" src="js/search1.js"></script>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="homeT.php"><img src="images/logo1.png" alt="EduFlex Logo" width="150px"></a>
            </div>
            <ul>
                <li><a href="homeT.php">Home</a></li>
                <li><a href="aboutusT.php">About Us</a></li>
                <li><a href="programT.php">Programs</a></li>
                <li><a href="contactT.php">Contact us</a></li>
            </ul>
            <div class="search-container">
            <input type="text" id="search-query" placeholder="Search">
            <button class="search-btn" onclick="performSearchT()">Search</button>
</div>
            
           <a href="home.php"> <button class="log-out">Log Out</button></a>
        </div>
    </nav>

    <h1 id="mod" align="center"> Educational Technology Project Planning</h1>
        
        
        <div class="box">
			<h2 id="title">Module Overview</h2>
			<p id="para2">
            The Educational Technology Project Planning module prepares educators to effectively plan, implement, and manage technology integration projects. Participants will learn to align technology with educational goals, manage resources, mitigate risks, and ensure successful outcomes. This module focuses on strategic planning, budgeting, risk management, and collaboration to drive meaningful improvements in teaching and learning.</p>
			
     
            <p id="l1"> Learning Outcomes:
                <button id="btn" onclick="location.href='content/12.pdf';">See more</button>
              </p>
              
            <p id="l2" class="class">Week 01</p>
            <p id="l4">1.A Strategic Approach for Educators<br><button id="btn" onclick="location.href='content/13.pdf';">View PDF</button>
           
           <br> Watch this reference video<br>
            <button id="btn" onclick="window.open('https://youtu.be/T4qzeuBTj14?feature=shared', '_blank')">Watch</button>                  </p><br> <hr><br><br>

           
        </div>
 <div id="contact"><h2 style="font-size: 22px; color: blueviolet; font-family:Verdana, Geneva, Tahoma, sans-serif;;">Contact Details</h2>
<h3 style="color: brown;"> Dr.Rajiv Fernando:<a href= "mailto: rapiyal@gmail.com"> rajiv@gmail.com </a></p></div>


    <!-- Footer Section -->
    <footer>
    <div class="footer-container">
        <div class="contact-info">
            <ul>
                <li><a href="contactT.php">Contact us</a></li>
                <li><a href="term&conT.php">Terms and Conditions</a></li>
                <li><a href="privacyT.php">Privacy Policy</a></li>
                <li><a href="faqT.php">FAQ</a></li>
            </ul>
            <p>
                <a href="mailto:eduflex@gmail.com">eduflex@gmail.com</a> |
                <a href="tel:+011xxxxxxx">011-xxxxxxx</a>
            </p>
            <div class="social-icons">
                <a href="https://www.facebook.com/#:~:text=Log%20into%20Facebook%20to%20start%20sharing%20and%20connecting%20with%20your"><img style="width:20px" src="images/fb-icon.png"  alt="Facebook"></a>
                <a href="https://www.linkedin.com/in/navoda-dasun-23b63326a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><img style="width:20px" src="images/linkedin-icon.jpg" alt="LinkedIn"></a>
                <a href="https://www.youtube.com/@eduflexerp8063"><img style="width:20px" src="images/youtube-icon.png" alt="YouTube"></a>
                <a href="eduflexk635@gmail.com"><img style="width:20px" src="images/email-icon.jpg" alt="Email"></a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p><b>&copy; 2024 EduFlex. All rights reserved.</b></p>
    </div>
</footer>
    </body>
    
</html>
