<?php

class Movie {
  public $title;
  public $releaseDate;
  public $director;
  public $genre;

  function __construct($_movie)
  {
    $this->setTitle($_movie["title"]);
    $this->setReleaseDate($_movie["releaseDate"]);
    $this->setDirector($_movie["director"]);
    $this->setGenre($_movie["genre"]);
  }
  /**
   * Set the value of title
   *
   * @return  self
   */ 
  public function setTitle($_title)
  {
    return $this->title = $_title;
  }

  /**
   * Set the value of releaseDate
   *
   * @return  self
   */ 
  public function setReleaseDate($_releaseDate)
  {
    $this->releaseDate = $_releaseDate;

    return $this;
  }

  /**
   * Set the value of director
   *
   * @return  self
   */ 
  public function setDirector($_director)
  {
    $this->director = $_director;

    return $this;
  }

  /**
   * Set the value of genre
   *
   * @return  self
   */ 
  public function setGenre($_genre)
  {
    $this->genre = $_genre;

    return $this;
  }
}