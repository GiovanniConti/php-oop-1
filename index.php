<?php
require_once "./classes/Movie.php";
require_once "./data/moviesList.php";

// Version 1
// $movie1 = new Movie($moviesList[0]);
// $movie2 = new Movie($moviesList[1]);

// var_dump($movie1);
// var_dump($movie2);

// Version using a foreach

foreach ($moviesList as $movie) {
  $selectedMovie = new Movie($movie);
  var_dump($selectedMovie);
}