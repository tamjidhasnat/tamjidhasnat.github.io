<!DOCTYPE html>
<html lang="en">

 <?php
   use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';



require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];
		
		
    if (isset($_POST['submit'])){
		$mail = new PHPMailer(true);
	$mail->SMTPDebug = 0;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'onlineprescription993@gmail.com';				
	//$mail->Password = 'qwertyuiop@1234567890';						
	$mail->Password = 'quxqyrlfrtdyqizd';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom('auto_gen@gmail.com','Greetings From '.$email.);		
	$mail->addAddress('tamjid.hasnat@gmail.com');

	
	$mail->isHTML(true);								
	$mail->Subject = $subject;
	$mail->Body = $message;
	
	$mail->send();
	

	}

	}

    ?>




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div class="user">
        <img src="asset/profile2.jpg" alt="">
        <h3 class="name">Tamjid Hasnat</h3>
        <p class="post">Developer</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#portfolio">portfolio</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>Tamjid Hasnat</span></h1>
    <p>A passionate web developer who is fascinated by technology and enjoys learning about it.
    </p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> name : </span> Tamjid Hasnat </h3>
        <h3> <span> age : </span> 24 </h3>
        <h3> <span> qualification : </span> BSC </h3>
        <h3> <span> post : </span> Back end developer </h3>
        <h3> <span> language : </span> Bangla,English </h3>
        <a href="asset/Tamjid Hasnat.pdf"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
    </div>

    <div class="counter">

        <div class="box">
            <span>1+</span>
            <h3>years of experience</h3>
        </div>

        <div class="box">
            <span>5+</span>
            <h3>project completed</h3>
        </div>


    </div>

</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> my <span>education</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2014</span>
        <h3>SSC</h3>
        <p>Govt Muslim High School,Chittagong</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2016</span>
        <h3>HSC</h3>
        <p>Govt City College,Chittagong</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2018-2022</span>
        <h3>BSC in CSE</h3>
        <p>East West University,Dhaka</p>
    </div>



</div>

</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> my <span>portfolio</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="images/img1.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/img2.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/img3.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/img4.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/img5.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/img6.jpg" alt="">
    </div>

</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i>  tamjid.hasnat@gmail.com </h3>
            <h3> <i class="fas fa-phone"></i>  +8801521401847 </h3>
            <h3> <i class="fas fa-phone"></i>  +8801643575142 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i>  Banasree, Dhaka, Bangladesh. </h3>
        </div>

    </div>

    <form action="index.php" method="post">

        <input type="text" name="name" placeholder="name" class="box"required>
        <input type="email" name="email"placeholder="email" class="box"required>
        <input type="text" name="subject" placeholder="project" class="box"required>
        <textarea name="message" id="" cols="30" rows="10" class="box message" placeholder="message"required></textarea>
        <button type="submit" name="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>




    </form>

</div>

</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>