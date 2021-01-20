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
      <h2> Register</h2>
    </div>
    <form method="post" action="register.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
          <label>Username</label>
          <input type = "text" name="username" value="<?php echo $username; ?>">
      </div>
      <div class="input-group">
          <label>Email</label>
          <input type = "text" name="email" value= "<?php echo $email; ?>">
      </div>
      <div class="input-group">
          <label>Password</label>
          <input type = "password" name="password_1">
      </div>
      <div class="input-group">
          <label>Confirm Password</label>
          <input type = "password" name="password_2">
      </div>
      <div class = "input-group">
          <button type="submit" name = "register" class = "btn"> Register</button>
      </div>
      <p>
          Already a member? <a href = "login.php"> Sign In</a>
      </p>
    </form>
    
</body>
</html>