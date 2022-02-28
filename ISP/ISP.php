<?php

interface Movie
{
  public function play();
}

interface AudioControl
{
  public function increaseVolume();
}

class TheLionKing implements Movie, AudioControl
{
  public function play()
  {
    // TODO: Implement play() method.
  }

  public function increaseVolume()
  {
    // TODO: Implement increaseVolume() method.
  }
}

class ModernTimes implements Movie
{
  public function play()
  {
    // TODO: Implement play() method.
  }
}