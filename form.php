<?php
  $email = $_GET['email'];
  $name = $_GET['password'];
?>
 <h1><?php echo $name ?></h1>
 <p><?php echo $email ?></p>
 <h3><?php echo $name ?></h3>
<?php
  switch ($email) {
    case "Davaadulam1000@gmail.com";
      echo "Sain baina zuv";
      break;
    case "";
      echo "Andaa ymar neg ym oruul";
      break;
    default:
      echo "duus duus";
    break;
  }
?>
