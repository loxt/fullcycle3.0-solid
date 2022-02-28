<?php

class Movie
{
  public function play()
  {

  }

  public function increaseVolume()
  {

  }
}

class TheLionKing extends Movie
{

}

class ModernTimes extends Movie
{
//  method increase volume is not valid because the modern times movie doesn't have sound
  public function increaseVolume()
  {
  }
}