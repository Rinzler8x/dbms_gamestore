<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GameVerse - Profile</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>

  <header>
    <h1>User Profile</h1>
  </header>

  <main class="profile-page">
    <section class="profile-info">
      <!-- <h2>User Profile</h2> -->
      <div class="user-details">
        <div class="avatar">
          <img src="logo1.svg" alt="User Avatar">
        </div>
        <div class="user-data">
          <!-- <h3>Viraj Naik</h3>
          <p>Email: viraj123@gmail.com</p>
          <p>Location: Panaji, India</p> -->
          <?php
            require_once 'dbconnection.php';

            if(isset($_SESSION["username"])){
              $sql = "SELECT * FROM users WHERE users_id = ?;";
              $stmt = mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location: /Game store sem v/profile.php?error=stmt failed");
                exit();
              }

              mysqli_stmt_bind_param($stmt, "i", $_SESSION["id"]);
              mysqli_stmt_execute($stmt);
              $resultData = mysqli_stmt_get_result($stmt);

              while($row = mysqli_fetch_assoc($resultData)){
                $str .= "<h3>".$row['users_name']."</h3>
                        <p>Username: ".$row['users_username']."</p>
                        <p>Email: ".$row['users_email']."</p>";
              }
              echo $str;
            }

          ?>
          <!-- Other user details -->
        </div>
      </div>
    </section>

    <section class="order-history">
      <h2>Order Details</h2>
      <div class="orders">
        <!-- Display order history -->
        <div class="order">
          <p>Order ID: 123456</p>
          <p>Date: November 9, 2023</p>
          <p>Total Amount: Rs.500</p>
          <!-- Other order details -->
        </div>
        <!-- More orders -->
      </div>
    </section>
  </main>

  <footer>
    <!-- Footer content -->
  </footer>

</body>
</html>
