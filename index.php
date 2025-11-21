<?php
$successMessage = '';
$errorMessage = '';

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'my porfolio website';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

  
    $FullName = mysqli_real_escape_string($conn, trim($_POST['fullName']));
    $Email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $MobileNumber = mysqli_real_escape_string($conn, trim($_POST['mobileNumber']));
    $EmailSubject = mysqli_real_escape_string($conn, trim($_POST['emailSubject']));
    $Message = mysqli_real_escape_string($conn, trim($_POST['message']));


    if(!empty($FullName) && !empty($Email) && !empty($Message)) {
   
        $sql = "INSERT INTO `my client` (`Full Name`, `Email Address`, `Mobile Number`, `Email Subject`, `Your Message`) 
                VALUES ('$FullName', '$Email', '$MobileNumber', '$EmailSubject', '$Message')";
        
        if(mysqli_query($conn, $sql)) {
            $successMessage = "Thank you! Your message has been sent successfully.";
        } else {
            $errorMessage = "Error: " . mysqli_error($conn);
        }
    } else {
        $errorMessage = "Please fill in all required fields.";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio Website</title>

    <link rel="stylesheet" href="style.css">

    <!--box icons-->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
            
<body>

   <!--header design-->
 <header class="header">
    <a href="#" class="logo">Nataniel</a>

    <div class="bx bx-menu" id="menu-icon"></div>

    <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#education">Education</a>
        <a href="#skills">Skills</a>
        <a href="#contact">Contact</a>
    </nav>
 </header>   
    
<!--home section design--> 
 <section class="home" id="home">
    <div class="home-content">
        <h1>Hi, I'm <span>Nataniel Guadalupe</span></h1>
        <div class="text-animate">
             <h3>Web Developer</h3>                
        </div>
        <p>Passionate about crafting clean, responsive websites and smart systems that simplify lives. I thrive on solving problems, turning ideas into intuitive digital experiences, and building tech that bridges innovation with impact.</p>
         
        <div class="btn-box">
            <a href="#" class="btn">Hire Me</a>
            <a href="#" class="btn">Let's Talk</a>
        </div>
    </div>

     <div class="home-sci">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
    </div>

    <div class="home-imgHover"></div>
</section>  

<!--about section design -->
<section class="about" id="about">
    <h2 class="heading">About <span>Me</span></h2>
    <div class="about-img">
        <img src="image/516383040_24259182033705554_4238560022070697671_n - Edited.jpg" alt="">
        <span class="circle-spin"></span>
    </div>

    <div class="about-content">
        <h3>Web Developer!</h3>
        <p>Passionate about crafting clean, responsive websites and smart systems that simplify lives. 
           I thrive on solving problems, turning ideas into intuitive digital experiences, and building tech that bridges innovation with impact.</p>
        
        <div class="btn-box btns">
            <a href="#" class="btn">Read More</a>
        </div>         
    </div>
</section> 

<!--education section design--> 
<section class="education" id="education">
    <h2 class="heading">My <span>Journey</span></h2>

    <div class="education-row">
        <div class="education-column">
            <h3 class="title">Education</h3>

            <div class="education-box">
                <div class="education-content">
                    <div class="content">
                        <div class="year"><i class='bx bxs-calendar'></i> 2011 - 2012</div>
                        <h3>Goa Central School</h3>
                        <p>Goa Central School in Camarines Sur provides quality K–12 education that nurtures academic excellence and values formation. It empowers students through community engagement, digital literacy, and programs aligned with the Sustainable Development Goals.</p>
                    </div>
                </div>

                <div class="education-content">
                    <div class="content">
                        <div class="year"><i class='bx bxs-calendar'></i> 2019 - 2022</div>
                        <h3>Partido College</h3>
                        <p>Partido College in Camarines Sur provides affordable higher education that develops students’ academic and professional skills. It fosters community service, leadership, and innovation to prepare graduates for meaningful contributions to society.</p>
                    </div>
                </div>  

                <div class="education-content">
                    <div class="content">
                        <div class="year"><i class='bx bxs-calendar'></i> 2025 - 2026</div>
                        <h3>Partido State University</h3>
                        <p>Partido State University in Goa, Camarines Sur is a regional state institution dedicated to providing accessible and quality higher education. It advances instruction, research, and community service across its seven campuses, empowering students to contribute to academic excellence and social development in the Bicol Region.</p>
                    </div>  
                </div>
            </div>
        </div>

        <div class="education-column">
            <h3 class="title">Experience</h3>

            <div class="education-box">
                <div class="education-content">
                    <div class="content">
                        <div class="year"><i class='bx bxs-calendar'></i> 2025 - 2026</div>
                        <h3>Web Developer</h3>
                        <p>I have hands-on experience building and maintaining responsive websites using HTML, CSS, JavaScript, and modern frameworks. My work includes optimizing performance, ensuring cross-browser compatibility, and integrating APIs to deliver dynamic, user-friendly applications.</p>
                </div>
</div>

                <div class="education-content">
                    <div class="content">
                        <div class="year"><i class='bx bxs-calendar'></i> 2026 - 2027</div>
                        <h3>Web Developer</h3>
                        <p>I have experience developing and deploying web applications that integrate databases like MySQL and MongoDB. I also specialize in creating secure authentication systems and scalable back-end APIs to support dynamic, data-driven platforms.</p>
                    </div>
                </div>  

                <div class="education-content">
                    <div class="content">
                        <div class="year"><i class='bx bxs-calendar'></i> 2028 - 2029</div>
                        <h3>Web Developer</h3>
                        <p>I have experience designing intuitive user interfaces with frameworks like React and Vue, ensuring responsive layouts across devices. I also focus on accessibility standards and usability testing to deliver inclusive, user‑friendly web experiences.</p>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

<!--skills section design-->
<section class="skills" id="skills">
    <h2 class="heading">My <span>Skills</span></h2>

    <div class="skills-row">
        <div class="skills-column">
            <h3 class="title">Coding Skills</h3>

            <div class="skills-box">
                <div class="skills-content">
                    <div class="progress">
                        <h3>HTML <span>90%</span></h3>
                        <div class="bar"><span></span></div>
                    </div>

                    <div class="progress">
                        <h3>CSS <span>80%</span></h3>
                        <div class="bar"><span></span></div>
                    </div>

                    <div class="progress">
                        <h3>Javascript <span>65%</span></h3>
                        <div class="bar"><span></span></div>
                    </div>

                    <div class="progress">
                        <h3>Python <span>100%</span></h3>
                        <div class="bar"><span></span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="skills-column">
            <h3 class="title">Professional Skills</h3>

            <div class="skills-box">
                <div class="skills-content">
                    <div class="progress">
                        <h3>Web Developer <span>95%</span></h3>
                        <div class="bar"><span></span></div>
                    </div>

                    <div class="progress">
                        <h3>Front-End <span>67%</span></h3>
                        <div class="bar"><span></span></div>
                    </div>

                    <div class="progress">
                        <h3>Back-End <span>65%</span></h3>
                        <div class="bar"><span></span></div>
                    </div>

                    <div class="progress">
                        <h3>Full-Stack Tools <span>100%</span></h3>
                        <div class="bar"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--contact design section-->
<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span></h2>
    
    <!-- Display messages -->
    <?php if(!empty($successMessage)): ?>
        <div class="alert alert-success" style="color: green; padding: 10px; margin: 10px 0; border: 1px solid green; border-radius: 5px; background: #d4ffd4;">
            <?php echo $successMessage; ?>
        </div>
    <?php endif; ?>
    
    <?php if(!empty($errorMessage)): ?>
        <div class="alert alert-error" style="color: red; padding: 10px; margin: 10px 0; border: 1px solid red; border-radius: 5px; background: #ffd4d4;">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>
    
    <form method="POST" action="">
        <div class="input-box">
            <div class="input-field">
                <input type="text" name="fullName" placeholder="Full Name" required>
                <span class="focus"></span>
            </div>
            <div class="input-field">
                <input type="email" name="email" placeholder="Email Address" required>
                <span class="focus"></span>
            </div>
        </div>

        <div class="input-box">
            <div class="input-field">
                <input type="text" name="mobileNumber" placeholder="Mobile Number" required>
                <span class="focus"></span>
            </div>
            <div class="input-field">
                <input type="text" name="emailSubject" placeholder="Email Subject" required>
                <span class="focus"></span>
            </div>
        </div>

        <div class="textarea-field">
            <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <span class="focus"></span>
        </div>
    
        <div class="btn-box btns">
            <button type="submit" name="submit" class="btn">Submit</button>
        </div>
    </form>
</section>

<!-- footer design-->
<footer class="footer">
    <div class="footer-text">
        <p>Copyright &copy; 2025 by Natsuuu | All Rights Reserved.</p>
    </div>

    <div class="footer-iconTop">
        <a href="#"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
</footer>

<script src="script.js"></script>

</body> 
</html>