<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" type = "text/css" href = "style.css">
</head>
<body>
   <div class = "header">
      <h2> Login</h2>
    </div>
    <form method="post" action="login.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
          <label>Username</label>
          <input type = "text" name="username">
      </div>
      <div class="input-group">
          <label>Password</label>
          <input type = "password" name="password">
      </div>
      <div class = "input-group">
          <button type="submit" name = "login" class = "btn"> login</button>
      </div>
      <p>
          new member? <a href = "register.php"> Sign Up</a>
      </p>
    </form>
    
</body>
</html>