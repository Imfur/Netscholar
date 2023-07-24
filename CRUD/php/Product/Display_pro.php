<?php
include "db_con.php";
?>
<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>NetScholar</title>
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
          <a href="http://localhost/Netscholar/crud/php/Users/Display_user.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
         <li>
          <a href="http://localhost/Netscholar/crud/php/Message/Display_msg.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
         <li>
          <a href="http://localhost/Netscholar/crud/php/Product/Display_pro.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Products</span>
          </a>
        </li>
        <li>
          <a href="http://localhost/Netscholar/crud/php/admins/display_ad.php">
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


  <div class="container" style="padding-top: 180px;">
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $phone . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="add_new_pro.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Image</th>
        <th scope="col">name</th>
        <th scope="col">agent</th>
        <th scope="col">price</th>
        <th scope="col">country</th>
        <th scope="col">category</th>
        <th scope="col" colspan="2">Details</th>
        <th scope="col">Link</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `product`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["pro_id"]?></td>
            <td><img src="image/<?php echo $row['image'];?>" alt=" " height="75" width="75"></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["agent"]?></td>      
            <td><?php echo $row["price"]?></td> 
            <td><?php echo $row["county"]?></td> 
            <td><?php echo $row["category"]?></td>  
            <td><?php echo $row["details"]?></td>  
            <td><?php echo $row["link"]?></td>  
            <td>
            <a href="edit_pro.php?id=<?php echo $row["pro_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_pro.php?id=<?php echo $row["pro_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

   <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    
  </div>

   <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    
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