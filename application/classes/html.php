<?php defined('SYSPATH') or die('No direct script access.');

class HTML extends Kohana_HTML {

  /**
	 * Outputs meta data to templates
	 */
  public static function meta_helper($description, $keywords)
  {
    $meta_array = array(
  		array('name' => 'Content-type', 'content' => 'text/html; charset=UTF-8', 'type' => 'equiv'),
  		array('name' => 'X-UA-Compatible', 'content' => 'IE=8', 'type' => 'equiv'),
  		array('name' => 'author', 'content' => 'Tigé Boats'),
  		array('name' => 'description', 'content' => $description),
  		array('name' => 'keywords', 'content' => $keywords)
  	);
    
    $meta = "";
  	foreach($meta_array as $meta_data) 
  	{
  	  if(isset($media_data['type']))
  	  {
  	    $meta .= "<meta name='".$meta_data['name']."' content='".$meta_data['content']."' type='".$meta_data['type']."' />";
	    } 
	    else 
	    {
	      $meta .= "<meta name='".$meta_data['name']."' content='".$meta_data['content']."' />";
      }
  	}

  	return $meta;
  }
  
  /**
	 * Outputs global styles
	 */
  public static function global_styles_helper()
  { 
    $global_styles = HTML::style('public/stylesheets/reset.css');
    $global_styles .= HTML::style('public/stylesheets/globalnew.css');
    $global_styles .= HTML::style('public/stylesheets/navglobal.css');
    $global_styles .= HTML::style('public/stylesheets/globalcontent.css');
    
    return $global_styles;
  }
}