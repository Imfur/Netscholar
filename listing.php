

<?php
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "netscholar_db";

        // Create a new database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve the list of drivers from the database
        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);
?>
        
    </div>

    <script>
        function confirmBooking() {
            var confirmMessage = "Are you sure you want to choose this driver?";
            if (confirm(confirmMessage)) {
                window.location.href = "booking.php";
            }
        }
    </script>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>NetScholar</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/net.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="home.php">Home</a></li>
              <li><a href="category.php">Category</a></li>
              <li><a href="listing.php" class="active">Listing</a></li>
              <li><a href="contact.html">Contact Us</a></li> 
              <li><div class="main-white-button"><a href="index.html">SignUp/LogIn</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Check Out Our Listings</h6>
            <h2>Item listings of Different Categories</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="listing-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/int.png" style="height: 64px; width: 64px;"></span>
                        Scholarship
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/sch.png" style="height: 64px; width: 64px;"></span>
                        Internship
                      </div>
                    </div>
                  </div>
                </div> 

                
                <div class="col-lg-9">
                  <ul class="nacc">
                  <!-- first category listing of items -->
                  <?php
                  ini_set('display_errors', 1);
                  ini_set('display_startup_errors', 1);
                  error_reporting(E_ALL);
                  
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <li class="active">
              <div>
                <div class="col-lg-12">
                  <div class="owl-carousel owl-listing">
                    <div class="item">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="listing-item">
                            <div class="left-image">
                            <a href="#"><img src="/Netscholar/CRUD/php/Product/image/'.$row['image'].'" alt=""></a>
                              <div class="hover-content">
                                <div class="main-white-button">
                                  <a href="'.$row['link'].'"><i class="fa fa-link"></i>Apply</a>
                                </div>
                              </div>
                            </div>
                            <div class="right-content align-self-center">
                              <a href="#">'.$row['name'].'</h4></a>
                              <h6>by: '.$row['agent'].'</h6>
                              <span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> '.$row['price'].'</span>
                              <span class="details">Details: <em>'.$row['details'].'</em></span>
                              <span class="info"><img src="assets/images/category.png" style="height: 16px; width: 16px;">'.$row['category'].'<br><img src="assets/images/country.png" style="height: 16px; width: 16px;"> '.$row['county'].'</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </li>
        ';
    }
} else {
    echo "No drivers found.";
}
        // Close the database connection
        $conn->close();
        ?>          
                    
                  </ul>
                  
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              <img src="assets/images/netscholar-black.png" alt="">
            </div>
            <p>computer-based system, NetScholar, that provides
              a centralized platform for students and organizations to interact,
               reducing the barriers to access and increasing the chances of 
               success in securing scholarships and internships. </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Listing</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Awards</a></li>
                  <li><a href="#">Useful Sites</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Contact Us</h4>
            <p>Kigali, Rwanda</p>
            <div class="row">
              <div class="col-lg-6">
                <a href="#">+250-786-205-515</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="sub-footer">
            <p>Copyright © 2023 NetScholar, All Rights Reserved.
            <br>
			Design: Bruce jr</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>