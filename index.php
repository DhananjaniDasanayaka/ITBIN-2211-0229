<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>

<DOCTYPE html>
    <html lang = "en">
        <head>
            <meta charset = "UTF-8">
            <meta http-equive = "X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Suwa Arana Medicare</title>
            <link rel = "stylesheet" href = "style.css">
            

            
        </head>
        <body>

            <!-- header section starts -->

            <header class = "header">
                <a href = "a" class = "logo">  <strong>Suwa Arana Medicare</strong></a>
                

                <nav class = "navbar">
                    <a href = "#home">Home</a>
                    <a href = "#about">About</a>
                    <a href = "#services">Services</a>
                    <a href = "#doctors">Doctors</a>
                    <a href = "#appointment">Appointment</a>
                    <a href = "#blogs">Blogs</a>
                    
                    
                </nav>

                <div id = "menu-btn" class="fas fa-bars"></div>
            </header>

            <!-- header section ends -->

            <!-- home section starts -->
            
            <section class = "home" id = "home">

                

                <div class = "image">
                    <img src = "download.png" alt = "">
                </div>

                <div class = "content">
                    <h3>We take care healthy life</h3>
                    <p> A person who has good physical health is likely to have bodily functions and processes working at their peak </p>
                    <a href = "#appointment" class = "btn"> appointment us </a>
                    
                </div>
            </section>

            <!-- home section ends -->

            <!-- icons section starts -->

            <section class = "icons-container">

                <div class = "icons">
                    <i class = "fas fa-user-suwa arana md"></i>
                    <h3>150</h3>
                    <p>doctors at work</p>
                </div>

                <div class = "icons">
                    <i class = "fas fa-users"></i>
                    <h3>1030</h3>
                    <p>satisfied patients</p>
                </div>

                <div class = "icons">
                    <i class = "fas fa-procedures"></i>
                    <h3>490</h3>
                    <p>bed facility</p>
                </div>
                
                <div class = "icons">
                    <i class = "fas fa-hospital"></i>
                    <h3>70</h3>
                    <p>available hospital</p>
                </div>

           </section>

           <!-- icon section ends -->

           <!-- about section starts -->

           <section class = "about" id = "about">
            <h1 class = "heading"><br><span>About </span>us</h1>

            <div class = "row">
                <div class = "image">
                    <img src = "imageshtml.jfif" alt = "">
                </div>

                <div class = "content">
                    <h3>take the world's best quality treatment</h3>
                    <p></p>
                    <p></p>
                    <a href = "" class = "btn"> learn more <span class = "fas fa-chevron-right"></span></a>
                </div>
            </div>

        </section>

        <!-- about section ends-->

        <!-- services section starts -->

        <section class = "services" id = "services">

            <h1 class = "heading"><br>Our <span>Services</span> </h1>

            <div class = "box-container">

                <div class = "box">
                    <i class = "fas fa-notes-medical"></i>
                    <h3>free checkups</h3>
                    <p></p>
                    <a href = "#" class = "btn"> learn more <span class = "fas fa-chevron-right"></span> </a>
                </div>

                <div class = "box">
                    <i class = "fas fa-notes-ambulance"></i>
                    <h3>24/7 ambulance</h3>
                    <p></p>
                    <a href = "#" class = "btn"> learn more <span class = "fas fa-chevron-right"></span> </a>
                </div>

                <div class = "box">
                    <i class = "fas fa-user-md"></i>
                    <h3>expert doctors</h3>
                    <p></p>
                    <a href = "#" class = "btn"> learn more <span class = "fas fa-chevron-right"></span> </a>
                </div>

                <div class = "box">
                    <i class = "fas fa-user-pills"></i>
                    <h3>medicines</h3>
                    <p></p>
                    <a href = "#" class = "btn"> learn more <span class = "fas fa-chevron-right"></span> </a>
                </div>

                <div class = "box">
                    <i class = "fas fa-user-procedures"></i>
                    <h3>bed facility</h3>
                    <p></p>
                    <a href = "#" class = "btn"> learn more <span class = "fas fa-chevron-right"></span> </a>
                </div>

                <div class = "box">
                    <i class = "fas fa-user-heartbeat"></i>
                    <h3>total care</h3>
                    <p></p>
                    <a href = "#" class = "btn"> learn more <span class = "fas fa-chevron-right"></span> </a>
                </div>

            </div>

        </section>

        <!-- services section ends -->

        <!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"><br>Our <span>Doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="download (1).jfif" alt="">
            <h3>Dr.Kavindi Bandara</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="download (4).jfif" alt="">
            <h3>Dr.Tharindu Jayasinghe</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="download (2).jfif" alt="">
            <h3>Dr.Sanduni Fernando</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="download (3).jfif" alt="">
            <h3>Dr.Sachini Amarasinghe</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="download (5).jfif" alt="">
            <h3>Dr.Mahesh Liyanage</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="download (6).jfif" alt="">
            <h3>Dr.Lahiru Senanayake</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="download.jfif" alt="">
            <h3>Dr.Dilini Silva</h3>
            <span>intern doctor</span>
            <div class="share">
                
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="download (7).jfif" alt="">
            <h3>Dr.Kasun Rathnayake</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="images (1).jfif" alt="">
            <h3>Dr.Ishara De Silva</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
		
		<div class="box">
            <img src="images (3).jfif" alt="">
            <h3>Dr.Nadeeka Kumara</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
		
		<div class="box">
            <img src="images (4).jfif" alt="">
            <h3>Dr.Dulanga Tennakoon</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
		
		<div class="box">
            <img src="images (2).jfif" alt="">
            <h3>Dr.Vindya Rajapaksha</h3>
            <span>expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>


<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"><br><span>appoinmnet </span>us</h1>      

    <div class="row">

        <div class="image">
            <img src="images.jfif" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
        

        <h3>make appointment</h3>
        <input type="text"name="name" placeholder="name" class="box">
        <input type="email"name="email" placeholder="email" class="box">
        <input type="text"name="email" placeholder="number" class="box">
        <input type="date"name="date" placeholder="date" class="box">
        <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> </a>
                </div>
                
                
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i>  </a>
                </div>
                
                
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> </a>
                </div>
                
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i>  </a>
                </div>
                
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="blog-5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> </a>
                </div>
                
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="blog-6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i>  </a>
                </div>
                
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->


           <!-- footer section starts -->

           <section class = "footer">
                
            <div class = "box-container">

                <div class = "box">
                    <h3>quick links</h3>
                    <a href = "home.html"> <i class = "fas fa-chevron-right"></i> home </a>
                    <a href = "about.html"> <i class = "fas fa-chevron-right"></i> about </a>
                    <a href = "services.html"> <i class = "fas fa-chevron-right"></i> services </a>
                    <a href = "doctors.html"> <i class = "fas fa-chevron-right"></i> doctors </a>
                    <a href = "appoinment.html"> <i class = "fas fa-chevron-right"></i> appointment </a>
                    <a href = "#"> <i class = "fas fa-chevron-right"></i> review </a>
                    <a href = "#"> <i class = "fas fa-chevron-right"></i> blogs </a>
                </div>

                <div class = "box">
                    <h3>our services</h3>
                    <a href = "#"> <i class = "fas fa-chevron-right"></i> dental care </a>
                    <a href = "#"> <i class = "fas fa-chevron-right"></i> message therapy </a>
                    <a href = "#"> <i class = "fas fa-chevron-right"></i> cardioloty </a>
                    <a href = "#"> <i class = "fas fa-chevron-right"></i> diagnosis </a>
                    <a href = "#"> <i class = "fas fa-chevron-right"></i> ambulance service </a>
                </div>

                <div class = "box">
                    <h3>appointment info</h3>
                    <a href = "#"> <i class = "fas fa-phone"></i> +94011299662 </a>
                    <a href = "#"> <i class = "fas fa-phone"></i> +94011299661 </a>
                    <a href = "#"> <i class = "fas fa-envelope"></i> abc12@gmail.com </a>
                    <a href = "#"> <i class = "fas fa-envelope"></i> abcd34@gmail.com </a>
                    <a href = "#"> <i class = "fas fa-map-marker-alt"></i> Colombo, Sri Lanka </a>
                </div>

                <div class = "box">
                    <h3>follow us</h3>
                    <a href = "#"> <i class = "fas fa-faceappointment-f"></i> faceappointment </a>
                    <a href = "#"> <i class = "fas fa-facebook"></i> facebook </a>
                    <a href = "#"> <i class = "fas fa-twitter"></i> twitter </a>
                    <a href = "#"> <i class = "fas fa-instagram"></i> instagram </a>
                    <a href = "#"> <i class = "fas fa-linkedin"></i> linkedin </a>
                    <a href = "#"> <i class = "fas fa-pinterest"></i> pinterest </a>
                </div>
                
            </div>
            
            
           </section>

        </body>

    </html>