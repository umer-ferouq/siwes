<?php 
session_start();
if (!isset($_SESSION['phone']) && !isset($_SESSION['id'])) {   
     // header("Location: redirect.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>SIWES WEB</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="siwesweb website">
     <meta name="keywords" content="">
     <meta name="author" content="Umar Bello">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
     <link rel="stylesheet" href="../resource/css/bootstrap.min.css">
     <link rel="stylesheet" href="../resource/css/font-awesome.min.css">
     <link rel="stylesheet" href="../resource/css/animate.css">
     <link rel="stylesheet" href="../resource/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../resource/css/tooplate-style.css">
     <link rel="stylesheet" href="../resource/css/tellocss.css">
     <link rel="manifest" href="../pages/manifest.json">
<script>
if ('serviceWorker' in navigator) {
     navigator.serviceWorker.register('../../sw.js');
}
</script>
<script src="../scripts.js"></script>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50" class="index-background">

     <!-- PRE LOADER -->
      <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section> 
     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to Siwes Official Website</p>
                    </div>
               
               </div>
          </div>
     </header>


     <!-- MENU -->
     <nav class="navbar navbar-static-top navbar-default">
               <div class="container-fluid">
                 <div class="navbar-header">
                      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="icon icon-bar"></span>
                           <span class="icon icon-bar"></span>
                           <span class="icon icon-bar"></span>
                      </button>
           
                      <!-- lOGO TEXT HERE -->
                      <a href="index.html" class="navbar-brand">
                           <span class="logo">SIWES</span>Web</a>
                 </div>
           
                 <!-- MENU LINKS -->
                 <div class="collapse navbar-collapse" id="myNavbar">
                   <ul class="nav navbar-nav navbar-right">
                   <?php if (isset($_SESSION['email'])){
                        echo'<li class="appointment-btn"><a href="profile.php"><i class="fa fa-register"></i>Profile</a></li>
                        <li class="login-btn"><a href="logout.php"><i class="fa fa-login"></i>Log Out</a></li>';
                   }else{
                    echo '<li class="appointment-btn"><a href="login.php"><i class="fa fa-register"></i>Log in</a></li>';
                   } 
                   ?>
                    </ul>
                   <ul class="nav navbar-nav navbar-right"> 
                    <li><a href="#top" class="smoothScroll">Home</a></li>
                    <li><a href="#mission" class="smoothScroll">Mission</a></li>
                    <li><a href="#vision" class="smoothScroll">Vision</a></li>
                    <li><a href="#blog" class="smoothScroll">Blog</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    <li class="appointment-btn"><a href="register.php"><i class="fa fa-register"></i>Register</a></li>

                   </ul>
                 </div>
            </div>
          </nav>


     <!-- MISSION -->
     <section id="mission">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to  <span class="hch">SIWES</span>Web</a></h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Motto: ..Building a student capacity development.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="../resource/images/profile-img.png" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Muhammad</h3>
                                        <p>Coordinator</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- VISION -->
     <section id="vision" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Training</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="../resource/images/pic2.jpeg" class="img-responsive" alt="" style="height:200px; border-radius:10px 10px 0 0;">

                                   <div class="team-info">
                                        <h3>Industries Collaboration</h3>
                                        <p>some text</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 08034349120</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">coodinator@gmail.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             <li><a href="#" class="fa fa-flickr"></a></li>

                                        </ul>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="../resource/images/pic.jpg" style="height:200px; border-radius:10px 10px 0 0;" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>MDA's Staff Training</h3>
                                        <p>Departments, Ministries and Agencies</p>
                                        <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 08034349120</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">mda@siwes.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-facebook-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             <li><a href="#" class="fa fa-flickr"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="../resource/images/pic1.jpeg"style="height:200px; border-radius:10px 10px 0 0;" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Company Staff Training</h3>
                                        <p>Company and other industries</p>
                                        <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 08034349120</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">company@siwes.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-twitter"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- BLOG -->
     <section id="blog" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>News Today</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news.php">
                              <img src="../resource/images/pic3.jpeg" class="img-responsive" style="height:270px;" alt="">
                              </a>
                              <div class="news-info">
                                   <span>March 08, 2025</span>
                                   <h3><a href="news.php">Innovation</a></h3>
                                   <p>Neccesity is the mother of invention.</p>
                                   <div class="author">
                                        <img src="../resource/images/profile-img.png" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Umar Muhammad</h5>
                                             <p>Director innovation</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news.php">
                                   <img src="../resource/images/roses.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>October 20, 2024</span>
                                   <h3><a href="news.php">Nature and wild life conservation</a></h3>
                                   <p>Nature is a wonderful give we have to conserve it.</p>
                                   <div class="author">
                                        <img src="../resource/images/profile-img.png" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Hauwa Ahmad</h5>
                                             <p>Director Natural Science</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news.php">
                                   <img src="../resource/images/pic3.jpeg" class="img-responsive" style="height:270px;" alt="">
                              </a>
                              <div class="news-info">
                                   <span>November 27, 2021</span>
                                   <h3><a href="news.php">6G Research</a></h3>
                                   <p>Reaserch on 6G is ongoing.</p>
                                   <div class="author">
                                        <img src="../resource/images/profile-img.png" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Musa Sale</h5>
                                             <p>Director Research</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
        <div class="container">
             <div class="row">
                  <div class="col-md-12 col-sm-12 border-top">
                       <div class="col-md-4 col-sm-6">
                            <div class="copyright-text"> 
                                 <p>Copyright &copy; 2025 SIWES Web</p>
                            </div>
                       </div>
                       <div class="col-md-6 col-sm-6">
                            <div class="footer-link"> 
                            <a href="#">Training Centres</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Regional Offices</a>
                                   <a href="#">Institutions</a>
                                   <a href="#">Industries</a>
                            </div>
                       </div>
                       <div class="col-md-2 col-sm-2 text-align-center">
                            <div class="angle-up-btn"> 
                                <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                            </div>
                       </div>   
                  </div>  
             </div>
        </div>
   </footer>

   <!-- SCRIPTS -->
   <!-- SCRIPTS -->
   <script src="../resource/js/jquery.js"></script>
     <script src="../resource/js/bootstrap.min.js"></script>
     <script src="../resource/js/jquery.sticky.js"></script>
     <script src="../resource/js/jquery.stellar.min.js"></script>
     <script src="../resource/js/wow.min.js"></script>
     <script src="../resource/js/custom.js"></script>
     <script src="../resource/js/smoothscroll.js"></script>
</body>
</html>