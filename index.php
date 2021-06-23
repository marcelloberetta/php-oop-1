<?php


  require_once __DIR__ . "/Movie.php";

  $film1 = new Movie("American Pie", "commedia", "150");
  $film2 = new Movie("Il signore degli anelli", "fantascienza", "300");

  $film1-> setPrice("10");
  $film2-> setPrice("20");
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>
</head>
<body>




  <h1> <?php echo $film1->getInfoMovies(); ?> </h1>
  <h2> <?php echo $film1->getPrezzo(); ?> </h2>

  <h1><?php echo $film2->getInfoMovies(); ?></h1>
  <h2><?php echo $film2->getPrezzo(); ?></h2>




  
</body>
</html>