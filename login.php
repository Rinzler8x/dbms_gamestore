<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GameVerse - Login</title>
  <link rel="stylesheet" href="login.css">
  <!-- Link your CSS file for styling -->
</head>
<body>

  <main>
    <section id="login">
      <div class="login-container">
        <h2>Login to GameVerse</h2>
        <form action="/Game store sem v/action_login.php" method="post">
          <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
          </div>
          <button type="submit" name="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
      </div>
    </section>
  </main>

  <footer>
    <!-- Footer content here -->
  </footer>

</body>
</html>
