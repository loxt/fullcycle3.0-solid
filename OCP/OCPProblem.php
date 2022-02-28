<?php

class Video
{
  private $type;

  public function calcInterest()
  {
    if ($this->type == "Movie") {
      // Calc interest based on movie
    } else if ($this->type == "TVSHOW") {
      // Calc interest based on series
    }
  }
}