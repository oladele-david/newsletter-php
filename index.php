<?php  include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP Newsletter Form</title>
</head>
<body>

<h2>Happy  Newsletter</h2>

<form method="post">
  <div class="container">
    <h2>Subscribe to our Newsletter</h2>
    <p>This is a simple newsletter form that you can integrate to your website.</p>
  </div>

  <div class="container" style="background-color:white">
    <?php if ($_REQUEST['error'] == 0) { ?>
        <div class="successs">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong><?php echo $_SESSION['message']; ?></strong>
        </div>
   <?php } elseif ($_REQUEST['error'] == 1){ ?>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong><?php echo $_SESSION['message']; ?></strong>
        </div>
    <?php } ?>
    <input type="text" placeholder="Name" name="name" required>
    <input type="email" placeholder="Email Address" name="mail" required>
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label>
  </div>

  <div class="container">
    <input type="submit" name="submit" value="Subscribe">
  </div>
</form>

</body>
</html>
