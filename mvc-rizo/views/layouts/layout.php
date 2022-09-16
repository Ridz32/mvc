<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" device-width="initial-scale=1.0">
  <meta name="author" content="Gabriel Roy-Rizzoli, 2295331">
  <title>MVC Rizo</title>
  <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
  <nav>
    <a href="?module=forum&action=home">Home</a>

  <?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  if(isset($_SESSION['loggedUserId'])){
    echo
    "<a href='?module=forum&action=index'>My articles</a>
    <a href='?module=forum&action=create'>Create</a>
    <a href='?module=user&action=logout'>Log out</a>";
  } else {
    echo
    "<a href='?module=user&action=create'>Register</a>
    <a href='?module=user&action=login'>Login</a>";
  }
  ?>
  </nav>
  <?php
  if(isset($_SESSION['userName'])){
      echo "<i>Howdy, " . $_SESSION['userName'] . '</i>';
    } else {
      echo "<i>Howdy, stranger!</i>";
    }
  ?>

  <div class="container">
    <?php echo $content; ?>
  </div>
</body>
</html>
