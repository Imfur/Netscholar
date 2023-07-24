<?php
include "db_con.php";

$id = ""; // Declare the $id variable

if (isset($_GET["id"])) {
   $id = $_GET["id"];
   $sql = "SELECT * FROM product WHERE pro_id = $id";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
}

if (isset($_POST["submit"])) {
   $id = $_POST['id']; // Retrieve the ID from the form
   $name = $_POST['name'];
   $agent = $_POST['agent'];
   $price = $_POST['price'];
   $county = $_POST['county'];
   $category = $_POST['category'];
   $details = $_POST['details'];
   $link = $_POST['link'];

   $sql = "UPDATE product SET name = '$name', agent = '$agent', price = '$price', county = '$county', category = '$category', details = '$details', link = '$link' WHERE pro_id = $id";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      echo "<script>alert('New record updated successfully');</script>";
      header("Location: Display_pro.php");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>NetScholar</title>
</head>

<style>
form .row{
   border-radius: 8px;
  padding: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1),
    0 8px 16px rgba(0, 0, 0, 0.1);
  max-width: 700px;
  width: 100%;

}
form input{
   height: 55px;
  width: 100%;
  border: 1px solid #ccc;
  border-radius: 6px;
  margin-bottom: 15px;
  font-size: 1rem;
  padding: 0 14px;
}
form textarea{
   height: 55px;
  width: 100%;
  border: 1px solid #ccc;
  border-radius: 6px;
  margin-bottom: 15px;
  font-size: 1rem;
  padding: 0 14px;
}



</style>


<body>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Edit Products</h3>
         <p class="text-muted">Complete the form below to Edit a Product</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
         <div class="row mb-3">
               <div class="col">
            <label>ID:</label>
            <input type="text" name="id" value="<?php echo $id; ?>"><br>
            </div>

            <div class="col">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            </div>

            <div class="col">
            <label>Agent:</label>
            <input type="text" name="agent" value="<?php echo $row['agent']; ?>"><br>
            </div>
            <br><br>
            <div class="mb-3">
            <label>Price:</label>
            <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>
            </div>

            <div class="mb-3">
            <label>County:</label>
            <input type="text" name="county" value="<?php echo $row['county']; ?>"><br>
            </div>

            <div class="mb-3">
            <label>Category:</label>
            <input type="text" name="category" value="<?php echo $row['category']; ?>"><br>
            </div>
            <div class="mb-3">
            <label>Details:</label>
            <textarea name="details"><?php echo $row['details']; ?></textarea><br>
            </div>
            <div class="mb-3">
            <label>Link:</label>
            <input type="text" name="link" value="<?php echo $row['link']; ?>"><br>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Update</button>
               <a href="http://localhost/Netscholar/crud/php/admins/Display_pro.php" class="btn btn-danger">Cancel</a>
            </div>
            </div>   
</form>
</div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>