<?php
  if ( isset($_GET['login']) ){
    $for_login = "?login=";
    $for_login .= $_GET['login'];
  }
  else{
    $for_login = "";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Εύδοξος</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="500ms">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index.php<?php echo $for_login; ?>"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Search & Login Area -->
                        <div class="search-login-area d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="search.php<?php echo $for_login; ?>" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Αναζήτηση">
                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Login Area -->
                            <div class="login-area">
                              <?php
                                if ( isset($_GET['login']) ){
                              ?>
                                <a href="profil.php?login=<?php echo $_GET['login']; ?>"><span><?php echo $_GET['login'] ?></span> <i class="fa fa-lock" aria-hidden="true"></i></a>
                              <?php
                                } else{
                              ?>
                                <a href="login.php"><span>Είσοδος / Εγγραφή</span> <i class="fa fa-lock" aria-hidden="true"></i></a>
                              <?php
                              }
                              ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="egames-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="egamesNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#">Φοιτητής</a>
                                        <ul class="dropdown">
                                            <li><a href="dhlwsh.php<?php echo $for_login; ?>">Δήλωση Συγγραμμάτων</a></li>
                                            <li><a href="#">Εύδοξος +</a></li>
                                            <li><a href="map.php<?php echo $for_login; ?>">Σημεία Διανομής</a></li>
                                            <li><a href="#">Παράδοση Συγγραμμάτων</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Γραμματεία</a>
                                        <ul class="dropdown">
                                          <li><a href="insertbook.php<?php echo $for_login; ?>">Προσθήκη Βιβλίου</a></li>
                                            <li><a href="#">Διαχείριση Συγγραμμάτων</a></li>
                                            <li><a href="#">Διαχείριση Γραμματείας</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Εκδότης</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Διαχείριση Συγγραμμάτων</a></li>
                                            <li><a href="#">Υπηρεσία Ταχυμεταφοράς</a></li>
                                            <li><a href="#">Κοστολόγηση</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#l">Βιβλιοπωλείο</a>
                                        <ul class="dropdown">
                                          <li><a href="#">Διαχείριση Συγγραμμάτων</a></li>
                                          <li><a href="#">Παράδοση Συγγραμμάτων</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="announcement.php<?php echo $for_login; ?>">Ανακοινώσεις</a></li>
                                    <li><a href="contact.php<?php echo $for_login; ?>">Επικοινωνία</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>

                    <ul class="breadcrumb">
                     <li><a href="index.php<?php echo $for_login; ?>">Αρχική</a></li>
                     <li>  »  <li>
                     <li><a href="login.php<?php echo $for_login; ?>">Είσοδος</a></li>
                     <li>  »  <li>
                     <li><a href="signup.php<?php echo $for_login; ?>">Εγγραφή Φοιτητή</a></li>
                   </ul>
                </div>
            </div>
        </div>

    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="mt-100">
                        <div class="post-a-comment-area mb-30 clearfix" id="reply">
                            <h4 class="mb-50">Εισαγωγή Στοιχείων Φοιτητή</h4>

                            <!-- Reply Form -->
                            <div class="contact-form-area">
                                <form action="insert.php" method="post">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                          <input type="text" class="form-control" id="text" placeholder="Όνομα χρήστη*" name="username">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                          <input type="text" class="form-control" id="name" placeholder="Κωδικός πρόσβασης*" name="password">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                          <input type="text" class="form-control" id="name" placeholder="Ίδρυμα*" name="idruma">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                          <input type="text" class="form-control" id="name" placeholder="Σχολή*" name="sxolh">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                          <input type="email" class="form-control" id="name" placeholder="Email*" name="email">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                          <input type="text" class="form-control" id="name" placeholder="Τηλέφωνο*" name="thlefwno">
                                        </div>
                                        <div class="col-12">
                                            <button class="btn egames-btn w-100" type="submit">Εγγραφή</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <p class="signup"> <a href="signupgram.php" >Εγγραφή Γραμματείας</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="300ms">
                            <div class="widget-title">
                                <h4>Φοιτητής</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="info_foithth.php<?php echo $for_login; ?>">Πως να δηλώσω σύγγραμμα;</a></li>
                                        <li><a href="info_foithth.php<?php echo $for_login; ?>">Γιατί να ανταλλάξω βιβλία;</a></li>
                                        <li><a href="info_foithth.php<?php echo $for_login; ?>">Πως να κάνω ανταλλαγή;</a></li>
                                        <!-- <li><a href="#">God of war</a></li>
                                        <li><a href="#">Persona 5</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="300ms">
                            <div class="widget-title">
                                <h4>Γραμματεία</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="info_grammateias.php<?php echo $for_login; ?>">Ποιές είναι οι αρμοδιότητές μου;</a></li>
                                        <li><a href="info_grammateias.php<?php echo $for_login; ?>">Πως να διαχειριστώ συγγράμματα;</a></li>
                                        <li><a href="info_grammateias.php<?php echo $for_login; ?>">Πως να διαχειριστώ μαθήματα;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="500ms">
                            <div class="widget-title">
                                <h4>Εκδότης</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="#">Ποιές είναι οι ενέργειές μου;</a></li>
                                        <li><a href="#">Τι μου προσφέρει ο Εύδοξος;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70 wow fadeInUp" data-wow-delay="700ms">
                            <div class="widget-title">
                                <h4>Βιβλιοπωλείο</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="#"></a></li>
                                        <li><a href="#">Ποιές είναι οι αρμοδιότητές μου;</a></li>
                                        <li><a href="#">Πως να προσθέσω βιβλία;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
