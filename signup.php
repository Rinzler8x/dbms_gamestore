<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GameVerse - Sign Up</title>
  <link rel="stylesheet" href="signup.css">
  <!-- Link your CSS file for styling -->
</head>
<body>

  <header>
    <h1>GameVerse</h1>
  </header>

  <main>
    <section id="signup">
      <div class="signup-container">
        <h2>Create an Account</h2>
        <form action="/Game store sem v/action_signup.php" method="post">
          <div class="input-group">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Choose a username" required>
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter a password" required>
          </div>
          <button type="submit" name="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.html">Login</a></p>
      </div>
    </section>
  </main>

  <footer>
    <!-- Footer content here -->
  </footer>

</body>
</html>
