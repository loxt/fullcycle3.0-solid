<?php

abstract class Video
{
  abstract public function calcInterest();
}

class Movie extends Video
{
  public function calcInterest()
  {
    // TODO: Implement calcInterest() method.
  }
}

class TVShow extends Video
{
  public function calcInterest()
  {
    // TODO: Implement calcInterest() method.
  }
}