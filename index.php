<?php include('server.php');
   
   if(empty($_SESSION['username'])) {
      header('location: login.php');
   }

?>

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
      <h2> Home page</h2>
   </div>
   <div class = "content">
       <?php if(isset($_SESSION['success'])): ?>
           <div class="error success">
              <h3>
                 <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                 ?>
              </h3>
            </div>
         
       <?php endif ?>


   
       <?php if (isset($_SESSION["username"])): ?>
          <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

   <div class = "input-group">
        <label> Full Name </label>
        <input type ="text">
        <label> Age </label>
        <input type ="number" >
        <label> Date Of Birth </label>
        <input type ="date">
        <label> Contact Number </label>
        <input type ="number">
        <div class = "center">
             <button type = "submit" class = "btn">submit</button>
        </div>

          <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
       <?php endif ?>

    </div>

    
    
</body>
</html>