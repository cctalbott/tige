<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blank extends Controller_Template {
  public $template = 'layouts/blank';
  public $session;

  /**
   * The before() method is called before your controller action.
   * In our template controller we override this method so that we can
   * set up default values. These variables are then available to our
   * controllers if they need to be modified.
   */
  public function before()
  {
    parent::before();

    if($this->auto_render):
  	  // Set session to variable
  	  $this->session = Session::instance();
  	  
  	  // Get request params
  	  $this->request = Request::instance();
  	  
  		// Initialize empty values
  		$this->template->meta = '';
  	  $this->template->title = '';
  	  $this->template->unique_styles = '';
  	  $this->template->unique_scripts = '';
    endif;
  }

  /**
   * The after() method is called after your controller action.
   * In our template controller we override this method so that we can
   * make any last minute modifications to the template before anything
   * is rendered.
   */
  public function after()
  {
  	if($this->auto_render):
  	  //
  	endif;
  	
  	parent::after();
  }
}