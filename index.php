
<?php
$naslov = "Postani Programer";
$nav = ["Glavna", "O nama", "Kontakt"];
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $naslov; ?></title>
</head>
<body>
  <h1><?php echo $naslov; ?></h1>

  <nav>
    <?php
      foreach ($nav as $link) {
        echo "<a href='#'>$link</a> ";
      }
    ?>
  </nav>
</body>
</html>

