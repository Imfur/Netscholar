<?php
include "db_con.php";

if (isset($_POST["submit"])) {
   // Retrieve form inputs
   $oldEmail = $_POST['email'];
   $newEmail = $_POST['New_email'];
   $password = $_POST['password'];
   $newPassword = $_POST['new_password'];

   // Check if the old email and password match the user's current information
   $sql = "SELECT * FROM admins WHERE email = '$oldEmail' AND password = '$password'";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
      // Update the user's email
      $updateSql = "UPDATE admins SET email = '$newEmail', password = '$newPassword' WHERE email = '$oldEmail'";
      $updateResult = mysqli_query($conn, $updateSql);

        if ($updateResult) {
            // Redirect to a success page or display a success message
            header("Location: Display_ad.php");
            exit();
        } else {
            // Display an error message
            echo "Failed: " . $conn->error;
        }
    } else {
        echo "<script language='javascript'>
              alert('Wrong Email.');
          </script>";
          header("Location: Display_ad.php");
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
   <link rel="stylesheet" href="assets/css/signin.css">
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
         <h3>Edit Admin</h3>
         <p class="text-muted">Complete the form below to Edit user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Email:</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter old email">
               </div>

               <div class="col">
                  <label class="form-label">NEW Email:</label>
                  <input type="email" class="form-control" name="New_email" placeholder="New Email @daviscollege.rw">
               </div>

               <div class="mb-3">
                  <label class="form-label">Password:</label>
                  <input type="password" class="form-control" name="password" placeholder="Old p***">
               </div>

               <div class="mb-3">
                  <label class="form-label">NEW Password:</label>
                  <input type="password" class="form-control" name="new_password" placeholder="New p***">
               </div>
            
                        <br>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Update</button>
               <a href="http://localhost/Netscholar/crud/php/admins/Display_ad.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>