<?php

interface Category
{

}

class DramaCategory implements Category
{
}

class Movie
{
  public function __construct($name, Category $category)
  {
    $this->name = $name;
    $this->category = $category;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    return $this->name = $name;
  }

  public function setCategory(Category $category)
  {
    return $this->category = $category;
  }

  public function getCategory()
  {
    return $this->category;
  }
}