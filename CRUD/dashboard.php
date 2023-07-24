<?php
           
           include "db_con.php";
        ?>
<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> NetScholar</title>
    <link rel="stylesheet" href="admin.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo">
      <a href="http://localhost/Netscholar/home.php">
      <Img src="netscholar.png"></Img>
      </a>
  </div>
      <ul class="nav-links">
        <li>
          <a href="http://localhost/Netscholar/crud/dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="php/Users/Display_user.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
         <li>
          <a href="php/Message/Display_msg.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
         <li>
          <a href="php/Product/Display_pro.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="php/Admins/Display_ad.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Admin settings</span>
          </a>
        </li>
       
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
    </nav>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: white; margin-top: 80px;">
  </nav>

  <div id="main-content" class="container allContent-section py-4">
    <div class="row">

        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-users  mb-2" style="font-size: 70px; color: white"></i>
                <h4 style="color:white;">Total Users</h4>
                <h5 style="color:white;">
                <?php
                    $sql = "SELECT * FROM student";
                    $result = $conn->query($sql);

                    if ($result !== false) {
                        $count = $result->num_rows;

                        echo $count;
                    } else {
                        echo "Error executing query: " . $conn->error;
                    }
                    ?>
</h5>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-th-large mb-2" style="font-size: 70px; color: white"></i>
                <h4 style="color:white;">Total Products</h4>
                <h5 style="color:white;">
                <?php
                    $sql = "SELECT * FROM product";
                    $result = $conn->query($sql);

                    if ($result !== false) {
                        $count = $result->num_rows;

                        echo $count;
                    } else {
                        echo "Error executing query: " . $conn->error;
                    }
                    ?>
               </h5>
            </div>
        </div>
        <div class="col-sm-3">
        <div class="card">
                <i class="fa fa-th mb-2" style="font-size: 70px; color: white"></i>
                <h4 style="color:white;">Total Messages</h4>
                <h5 style="color:white;">
                   
                   <?php
                   $sql = "SELECT * FROM contact_us";
                   $result = $conn->query($sql);

                   if ($result !== false) {
                       $count = $result->num_rows;

                       echo $count;
                   } else {
                       echo "Error executing query: " . $conn->error;
                   }
                   ?>
               </h5>
            </div>
        </div>

    </div>
    
</div>



  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
    
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>