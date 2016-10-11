<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Boatfeatures extends Controller_Template {
  public $template = 'layouts/ajax';
  private $model;
  
  /**
   * bow
   */
  public function action_bow()
  {
    $this->template->content = View::factory('pages/boats/features/bow');
    $model = $this->request->param('model');
    
    $this->template->content->bowimg = HTML::image("/public/images/features/rz/bow.jpg", array(
			'width' => '300', 'height' => '170',
			'alt' => 'Bow'
		));
  }
  
  /**
   * design
   */
  public function action_design()
  {
    $this->template->content = View::factory('pages/boats/features/design');
  }
  
  /**
   * dash
   */
  public function action_dash()
  {
    $this->template->content = View::factory('pages/boats/features/dash');
  }
  
  /**
   * lcd
   */
  public function action_lcd()
  {
    $this->template->content = View::factory('pages/boats/features/lcd');
  }
  
  /**
   * touch
   */
  public function action_touch()
  {
    $this->template->content = View::factory('pages/boats/features/touch');
  }
  
  /**
   * carpet
   */
  public function action_carpet()
  {
    $this->template->content = View::factory('pages/boats/features/carpet');
  }
  
  /**
   * tower
   */
  public function action_tower()
  {
    $this->template->content = View::factory('pages/boats/features/tower');
    $model = $this->request->param('model');
    
    if($model == "rz4" || $model == "rz2" || $model == "rzr" || $model == "r20")
    {
      $this->template->content->towerimg = HTML::image("/public/images/features/rz/tower.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'Alpha Z Tower'
  		));
	  }
	  else if($model == "z1")
	  {
	    $this->template->content->towerimg = HTML::image("/public/images/features/z1/tower.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'Alpha Z Tower'
  		));
	  }
	  else if($model == "24ve" || $model == "22ve")
	  {
	    $this->template->content->towerimg = HTML::image("/public/images/features/ve/tower.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'Alpha Z Tower'
  		));
	  }
	  else if($model == "22i")
	  {
	    $this->template->content->towerimg = HTML::image("/public/images/features/22i/tower.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'Alpha Z Tower'
  		));
	  }
	  else
	  {
	    $this->template->content->towerimg = HTML::image("/public/images/features/rz/tower.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'Alpha Z Tower'
  		));
	  }
  }
  
  /**
   * observers seat
   */
  public function action_observersseat()
  {
    $this->template->content = View::factory('pages/boats/features/observseat');
  }
  
  /**
   * reverse seat
   */
  public function action_reverseseat()
  {
    $this->template->content = View::factory('pages/boats/features/revseat');
  }
  
  /**
   * interior side pockets
   */
  public function action_sidepockets()
  {
    $this->template->content = View::factory('pages/boats/features/sidepockets');
  }
  
  /**
   * storage
   */
  public function action_storage()
  {
    $this->template->content = View::factory('pages/boats/features/storage');
    $model = $this->request->param('model');
    
    if($model == "z1" || $model == "rzr" || $model == "r20")
    {
      $this->template->content->storageimg = HTML::image("/public/images/features/z1/storage.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'transom activity center'
  		));
    }
    else if($model == "24ve")
    {
      $this->template->content->storageimg = HTML::image("/public/images/features/ve/storage.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'transom activity center'
  		));
    }
    else if($model == "22ve" || $model == "22i")
    {
      $this->template->content->storageimg = HTML::image("/public/images/features/ve/22/storage.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'transom activity center'
  		));
    }
    else if($model == "20v" || $model == "20i")
    {
      $this->template->content->storageimg = HTML::image("/public/images/features/20v/storage.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'transom activity center'
  		));
    }
    else
    {
      $this->template->content->storageimg = HTML::image("/public/images/features/z1/storage.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'transom activity center'
  		));
    }
  }
  
  /**
   * side storage
   */
  public function action_sidestorage()
  {
    $this->template->content = View::factory('pages/boats/features/sidestorage');
  }
  
  /**
   * deep freeboard
   */
  public function action_freeboard()
  {
    $this->template->content = View::factory('pages/boats/features/freeboard');
  }
  
  /**
   * audio
   */
  public function action_audio()
  {
    $this->template->content = View::factory('pages/boats/features/audio');
  }
  
  /**
   * walkover transom
   */
  public function action_walkovertransom()
  {
    $this->template->content = View::factory('pages/boats/features/walkovertran');
    $model = $this->request->param('model');
    
    if($model == "rz4" || $model == "rz2" || $model == "rzr" || $model == "r20")
    {
      $this->template->content->walkovertranimg = HTML::image("/public/images/features/rz/walkthroughtran.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'Walkover transom'
  		));
	  }
	  else if($model == "24ve" || $model == "22ve")
	  {
	    $this->template->content->walkovertranimg = HTML::image("/public/images/features/ve/walkthroughtran.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'Walkover transom'
  		));
	  }
	  else
	  {
	    $this->template->content->walkovertranimg = HTML::image("/public/images/features/rz/walkthroughtran.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'Walkover transom'
  		));
	  }
  }
  
  /**
   * Engines
   */
  public function action_engine()
  {
    $this->template->content = View::factory('pages/boats/features/engine');
  }
  
  /**
   * transom activity center
   */
  public function action_transomactivitycenter()
  {
    $this->template->content = View::factory('pages/boats/features/tac');
    $model = $this->request->param('model');
    
    if($model == "rz4" || $model == "rz2" || $model == "rzr" || $model == "r20")
    {
      $this->template->content->tacimg = HTML::image("/public/images/features/rz/tac.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'transom activity center'
  		));
		}
		else if($model == "z1")
		{
		  $this->template->content->tacimg = HTML::image("/public/images/features/z1/tac.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'transom activity center'
  		));
		}
		else if($model == "24ve" || $model == "22ve")
		{
		  $this->template->content->tacimg = HTML::image("/public/images/features/ve/tac.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'transom activity center'
  		));
		}
		else
		{
		  $this->template->content->tacimg = HTML::image("/public/images/features/rz/tac.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'transom activity center'
  		));
		}
  }
  
  /**
   * Swim Platform
   */
  public function action_swimplatform()
  {
    $this->template->content = View::factory('pages/boats/features/swimplatform');
    $model = $this->request->param('model');
    
    if($model == "rz2" || $model == "rz4")
    {
      $this->template->content->swim_platform_img = HTML::image("/public/images/features/rz/swimplatform.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'Swim Platform'
  		));
	  }
	  else if($model == "24ve" || $model == "22ve")
	  {
	    $this->template->content->swim_platform_img = HTML::image("/public/images/features/ve/swim_platform.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'Swim Platform'
  		));
	  }
	  else if($model == "22i")
	  {
	    $this->template->content->swim_platform_img = HTML::image("/public/images/features/22i/swim_platform.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'Swim Platform'
  		));
	  }
	  else 
	  {
	    $this->template->content->swim_platform_img = HTML::image("/public/images/features/rz/swimplatform.jpg", array(
  			'width' => '300', 'height' => '170',
  			'alt' => 'Swim Platform'
  		));
	  }
  }
  
  /**
   * Ice Chest
   */
  public function action_icechest()
  {
    $this->template->content = View::factory('pages/boats/features/icechest');
  }
}