<?php 


/**
* Class for file descripction
*/
class MyFile{

  public $date;
  public $link;
  public $name;
  
  function __construct($name, $date)
  {
    $this->name = ucfirst($name);
    $this->link = str_replace(" ", "-", $name);
    $this->date = $date;

  }
}
 ?>