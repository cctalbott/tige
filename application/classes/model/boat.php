<?php defined('SYSPATH') OR die('No Direct Script Access');

class Model_Boat extends ORM
{
  public $images;
  
  public function get_images($model) 
  {
    $data = simplexml_load_file(URL::base()."public/xml/boat_images.xml");
    
    $this->images = $data->xpath("//boat[name='".$model."']/image");
  }
}