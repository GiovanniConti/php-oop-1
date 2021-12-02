<?php
require_once "./classes/Movie.php";

$moviesList = [
  [
    "title" => "The Godfather",
    "releaseDate" => "1972",
    "director" => "Francis Ford Coppola",
    "genre" => "Crime, Drama",
  ],
  [
    "title" => "The Irishman",
    "releaseDate" => "2019",
    "director" => "Martin Scorsese",
    "genre" => "Biography, Crime, Drama",
  ],
];

$movie1 = new Movie($moviesList[0]);
$movie2 = new Movie($moviesList[1]);

var_dump($movie1);
var_dump($movie2);