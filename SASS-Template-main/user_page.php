<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
   header('location:login_form.php');
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MedBud</title>

   <link rel="stylesheet" href="./dist/scss/main.css">

   <link rel="icon" type="image/png" href="./dist/components/img/medbud__icon.png" />

   <script src="https://kit.fontawesome.com/29865ec48b.js" crossorigin="anonymous"></script>

   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

</head>

<body>
   <header class="header">
      <div class="container">
         <div class="header__wrapper" id="header">
            <div class="branding">
               <img src="./dist/components/img/logo__bgremoved_ver2.png" alt="" />
            </div>

            <div class="header__nav">
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="">MedTips</a></li>

                  <li class="navi">
                     <a href="#service" class="place">Services <i class="fa-solid fa-caret-down"></i></a>
                     <div class="dropdown">
                        <ul>
                           <li><a href="./dashboard.php">Book Appointment</a></li>
                           <li><a href="#">Department</a></li>
                        </ul>
                     </div>
                  </li>

                  <li><a href="">Contact</a></li>
               </ul>
            </div>

            <div class="logout__btn">
               <a href="./login_form.php">Logout</a>
            </div>

            <div class="burger__btn">
               <span></span>
               <span></span>
               <span></span>
            </div>
         </div>
      </div>

      <section class="text__content">
         <div class="container">
            <div class="text__content__wrapper">
               <div class="text__content__text">
                  <h1>Welcome to <span>MedBud, </span><?php echo $_SESSION['user_name'] ?></h1>
                  <h3>Your Healthcare Companion</h3>
               </div>
               <a href="#about" class="btn__new">Read More</a>
            </div>
         </div>
      </section>

      <!--Waves Container-->
      <div>
         <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
               <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
               <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
               <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
               <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
               <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
         </svg>
      </div>
      <!--Waves end-->
   </header>




   <section class="about" id="about">
      <div class="container">
         <div class="about__wrapper">
            <div class="about__title">
               <h4>ABOUT<span></span></h4>
               <h2>WHAT IS MEDBUD</h2>
            </div>

            <div class="about__text">
               <div class="left__about">
                  <p>Provided b brings together apps, online programs, online forums, and phone services, as well as a range of digital information resources.</p>
                  <ul>
                     <li>
                        <i class="fa-solid fa-check-double"></i>Evidence-based apps and online programs that can help you build personal skills and track progress
                     </li>
                     <li>
                        <i class="fa-solid fa-check-double"></i>Evidence-based apps and online programs that can help you build personal skills and track progress
                     </li>
                     <li>
                        <i class="fa-solid fa-check-double"></i>Evidence-based apps and online programs that can help you build personal skills and track progress
                     </li>
                  </ul>
               </div>
               <div class="right__about">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, omnis quibusdam accusamus doloribus eum, ratione temporibus neque totam suscipit placeat, corporis facilis. Accusamus error maiores, est obcaecati at aut quasi!</p>
                  <img src="./dist/components/img/about-icon.png" alt="">
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="lower__banner">
      <div class="container">
         <div class="lower__banner__title">
            <h2>WE PROVIDE BEST HEALTHCARE SERVICES</h2>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, quas!</h4>
         </div>
         <div class="lower__banner__wrapper">
            <div class="lower__banner__content">
               <div class="lower__banner__item">
                  <img src="./dist/components/img/cellphone.png" alt="">
                  <div class="lower__banner__text">
                     <h5>Doctor on Call</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sunt asperiores natus inventore neque blanditiis animi eos hic perferendis eligendi.</p>
                  </div>
               </div>
               <div class="lower__banner__item">
                  <img src="./dist/components/img/cellphone.png" alt="">
                  <div class="lower__banner__text">
                     <h5>Doctor on Call</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sunt asperiores natus inventore neque blanditiis animi eos hic perferendis eligendi.</p>
                  </div>
               </div>
               <div class="lower__banner__item">
                  <img src="./dist/components/img/cellphone.png" alt="">
                  <div class="lower__banner__text">
                     <h5>Doctor on Call</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sunt asperiores natus inventore neque blanditiis animi eos hic perferendis eligendi.</p>
                  </div>
               </div>
               <div class="lower__banner__item">
                  <img src="./dist/components/img/cellphone.png" alt="">
                  <div class="lower__banner__text">
                     <h5>Doctor on Call</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sunt asperiores natus inventore neque blanditiis animi eos hic perferendis eligendi.</p>
                  </div>
               </div>
            </div>

            <div class="lower__banner__opening">
               <div class="lower__banner__opening__text">
                  <h3>Opening Hours</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit ad possimus facilis sunt id sed nam, recusandae assumenda iusto necessitatibus.</p>
                  <p>Mon-Fri &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 6am-10pm</p>
                  <span></span>
                  <p>Sat-Sun &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 6am-8pm</p>
                  <span></span>
                  <br>
                  <a href="./dashboard.php"><i class="fa-solid fa-phone"></i>Book Appointment</a>
               </div>
            </div>
            <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
               <path fill="#f2f6fb" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,112C384,107,480,117,576,112C672,107,768,85,864,74.7C960,64,1056,64,1152,58.7C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
         </div>
      </div>
   </section>












   <!-- <section class="service">
      <div class="container">
         <div class="service__title">
            <h2>Our Services</h2>
            <h3>We offer</h3>
         </div>
         <div class="service__wrapper">
            <div class="service__item">
               <img src="./dist/components/img/about_img.png" alt="" />
               <h4>Service</h4>
               <a href="">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="service__item">
               <img src="./dist/components/img/about-icon.png" alt="" />
               <h4>Service</h4>
               <a href="">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="service__item">
               <img src="./dist/components/img/schedule.png" alt="" />
               <h4>Service</h4>
               <a href="">Learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
         </div>
      </div>
   </section> -->



   <!-- <section class="our__doctors">
      <div class="container">
         <div class="our__doctors__title">
            <h2 id="service">OUR DOCTORS</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, quam. </p>
         </div>
         <div class="our__doctors__wrapper">
            <div class="slider-nav">

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/tolentino-arnel-MD-1.jpg-1.png" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Arnel Tolentino</h3>
                     <h4>  ENT-HNS</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/Bosco-Favila-Czarina-OB.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Czarina Basco</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>OB-Gyne</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/Tang-Hervin-IM-Cardio-1.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Hervin Tang</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>IM - Cardiology</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/Delgado-1.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Angelica Delgado</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>General Surgery</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/Caranzo-1.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Jonathan Coranzo</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>General Anesthesia</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/Bosco-Favila-Czarina-OB.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Czarina Basco</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>OB-Gyne</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/Tang-Hervin-IM-Cardio-1.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Hervin Tang</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>IM - Cardiology</h4>
                  </div>
               </div>

               <div class="our__doctors__item">
                  <img src="./dist/components/img/doctors/Delgado-1.jpg" alt="">
                  <div class="our__doctors__item__text">
                     <h3>Dr. Angelica Delgado</h3>
                     <h4><i class="fa-solid fa-heart-pulse"></i>General Surgery</h4>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
         <path fill="#f2f6fb" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,112C384,107,480,117,576,112C672,107,768,85,864,74.7C960,64,1056,64,1152,58.7C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
   </section> -->


   <footer class="footer">
      <!-- <div class="upper__bg">
            <span></span>
        </div> -->
      <div class="container">


         <div class="footer__wrapper">
            <div class="footer__section">
               <div class="footer__branding">
                  <img src="./dist/components/img/medbud__logo.png" alt="">
                  <p>non mauris non mauris non mauris non mauris non mauris non mauris non mauris non mauris non mauris</p>

               </div>
            </div>
            <div class="links__together">
               <div class="footer__section">
                  <div class="links">
                     <div class="links__text">
                        <ul>
                           <span></span>

                           <h1>Links</h1>
                        </ul>
                     </div>

                     <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">MedTips</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Login</a></li>
                     </ul>
                  </div>
               </div>

               <div class="footer__section">
                  <div class="service">
                     <div class="service__text">
                        <ul>
                           <span></span>
                           <h1>Service</h1>
                        </ul>
                     </div>
                     <ul>
                        <li><a href="">Appointment</a></li>
                        <li><a href="">Appointment</a></li>
                        <li><a href="">Appointment</a></li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="footer__section">
               <div class="others">
                  <div class="others__text">
                     <ul>
                        <span></span>
                        <h1>Others</h1>
                     </ul>
                  </div>



                  <p>Follow us on Social Media</p>
                  <div class="footer__icons">
                     <ul>
                        <li>
                           <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fa-brands fa-facebook"></i></a>
                        </li>
                     </ul>
                  </div>
                  <!-- <div class="telephone">
                            <div class="telephone__text">
                                <ul>
                                    <span></span>
                                    <h1>Telephone</h1>
                                    <p>09918380404</p>
                                </ul>
                            </div>
                        </div>

                        <div class="email">
                            <div class="email__text">
                                <ul>
                                    <span></span>
                                    <h1>Email</h1>
                                    <p>damimongblahblah@gmail.com</p>
                                </ul>
                            </div>
                        </div> -->
               </div>
            </div>
         </div>
      </div>
      <div class="right__reserve">
         <span></span>
         <div class="right__text">
            <h1>MEDBUD </h1>
            <p><i class="fa-regular fa-copyright"></i>&nbsp;2023 All Rights Preserve</p>
         </div>

      </div>
   </footer>


   <!-- <div class="container__form">
      <div class="content">
         <h3>hi, <span>user</span></h3>
         <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
         <p>this is an user page</p>
         <a href="login_form.php" class="btn">login</a>
         <a href="register_form.php" class="btn">register</a>
         <a href="logout.php" class="btn">logout</a>
      </div>
   </div> -->

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

   <script src="./script.js"></script>

   <script>
      $(document).ready(function() {
         $('.slider-nav').slick({
            slidesToShow: 4, 
            slidesToScroll: 4, 
            autoplay: true,
            dots: true,
            autoplaySpeed: 4000, 
            responsive: [{
                  breakpoint: 768,
                  settings: {
                     slidesToShow: 2 
                  }
               },
               {
                  breakpoint: 480,
                  settings: {
                     slidesToShow: 1
                  }
               }
            ]
         });
      });
   </script>
</body>

</html>