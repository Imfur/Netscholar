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
        if (!$result) {
          die("Error executing query: " . $conn->error);
      }
?>
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
              <li><a href="index.html" class="active">Home</a></li>
              <li><a href="category.php">Category</a></li>
              <li><a href="listing.php">Listing</a></li>
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

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h6>Over 1000+ Active Listings</h6>
            <h2>Find Scholarship &amp; Internship</h2>
          </div>
        </div>
<?php
// Retrieve search form inputs
$category = isset($_POST['category']) ? $_POST['category'] : 'All Areas';
$county = isset($_POST['county']) ? $_POST['county'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : 'Price Range';


// Construct the SQL query based on the search criteria
$sql = "SELECT * FROM product WHERE 1=1"; // Start with a basic query

// Add conditions based on the selected search options
if ($category !== 'All Areas') {
  $sql .= " AND category = '$category'";
}

if (!empty($county)) {
  $sql .= " AND county = '$county'";
}


// Display the search results
// Execute the SQL query
$result1 = $conn->query($sql);

if (!$result1) {
    echo "Error executing query: " . $conn->error;
} elseif ($result->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        // Display the retrieved data here as desired
        echo "Product Name: " . $row["name"] . "<br>";
        echo "Agent: " . $row["agent"] . "<br>";
        echo "Price: " . $row["price"] . "<br>";
        echo "County: " . $row["county"] . "<br>";
        echo "Category: " . $row["category"] . "<br>";
        echo "Details: " . $row["details"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No results found.";
}



// Close the database connection
$conn->close();

?>

<div class="col-lg-12">
  <form id="search-form" name="gs" method="post" role="search" action="">
    <div class="row">
      <div class="col-lg-3 align-self-center">
          <fieldset>
              <select name="category" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()">
                  <option selected>All Areas</option>
                  <option value="Scholarship">Scholarship</option>
                  <option value="Internship">Internship</option>
              </select>
          </fieldset>
      </div>
      <div class="col-lg-3 align-self-center">
          <fieldset>
              <input type="address" name="county" class="searchText" placeholder="Enter a location" autocomplete="on" required>
          </fieldset>
      </div>
      <div class="col-lg-3 align-self-center">
          <fieldset>
              <select name="price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                  <option selected>Price Range</option>
                  <option value="free">free</option>
                  <option value="$100 - $250">$100 - $250</option>
                  <option value="$250 - $500">$250 - $500</option>
                  <option value="$500 - $1000">$500 - $1,000</option>
                  <option value="$1000+">$1,000 or more</option>
              </select>
          </fieldset>
      </div>
      <div class="col-lg-3">                        
          <fieldset>
              <button type="submit" class="main-button"><a href="listing.php" style="text-decoration: none !important;"><i class="fa fa-search"></i> </a>Search Now</button>
          </fieldset>
      </div>
    </div>
  </form>
</div>

        <div class="col-lg-10 offset-lg-1">
          <ul class="categories">
            <li><a href="category.html"><span class="icon"><img src="assets/images/sch.png" alt="Internship"></span> Internship</a></li>
            <li><a href="listing.html"><span class="icon"><img src="assets/images/int.png" alt="Scholarship"></span> Scholarship</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <div class="popular-categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Popular Categories</h2>
            <h6>Check Them Out</h6>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/int.png" alt=""></span>
                        Scholarship
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/sch.png" alt=""></span>
                        Internship
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-9 align-self-center">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Scholarship</h4>
                                <p>Netscholar will help you exploring scholarships is crucial for students as it opens doors to financial assistance, expands opportunities, fosters personal growth, and recognizes academic achievements. </p>
                                <div class="main-white-button"><a href="#"><i class="fa fa-eye"></i> Discover More</a></div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/grad.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-5 align-self-center">
                              <div class="left-text">
                                <h4>Internship </h4>
                                <p>It's essential to actively explore internship opportunities, research companies, and apply for positions that align with your interests and goals. Internships provide a valuable stepping stone towards a successful career and offer a platform to grow both personally and professionally.</p>
                                <div class="main-white-button"><a href="#"><i class="fa fa-eye"></i> Explore More</a></div>
                              </div>
                            </div>
                            <div class="col-lg-7 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/career.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="recent-listing">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Recent Listing</h2>
            <h6>Check Them Out</h6>
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
    echo "No list found.";
}
        // Close the database connection
        ?>   
                  
                    
                  </ul>
                  
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
              <img src="assets/images/netscholar-black.png" alt="Plot Listing">
            </div>
            <p>computer-based system, NetScholar, that provides
              a centralized platform for students and organizations to interact,
               reducing the barriers to access and increasing the chances of 
               success in securing scholarships and internships.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6 col-sm-6">
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
			Design: Bruce Jr</p>
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
