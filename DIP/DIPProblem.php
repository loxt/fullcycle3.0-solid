<?php

class DramaCategory
{

}

class Movie
{
  private $name;
  private $category;

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    return $this->name = $name;
  }

  public function setCategory(DramaCategory $category)
  {
    return $this->category = $category;
  }

  public function getCategory()
  {
    return new DramaCategory();
  }
}