<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Boatstemplate extends Controller_Template {
  public $template = 'layouts/default';
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

    if($this->auto_render)
    {
  	  // Set session to variable
  	  $this->session = Session::instance();
  	  
  	  // Get request params
  	  $this->request = Request::instance();
  	  
  		// Initialize empty values
  		$this->template->meta = '';
  	  $this->template->title = '';
  	  $this->template->unique_styles = '';
  	  $this->template->global_scripts = '';
  	  $this->template->unique_scripts = '';
  	  
  	  $this->template->globalheader = '';
  	  $this->template->globalnav = '';
  	  $this->template->modelnav = '';
    }
  }

  /**
   * The after() method is called after your controller action.
   * In our template controller we override this method so that we can
   * make any last minute modifications to the template before anything
   * is rendered.
   */
  public function after()
  {
  	if($this->auto_render)
  	{
  	  //$this->template->global_scripts .= HTML::script('public/javascripts/jquery/jquery-1.4.2.min.js');
  	  $this->template->global_scripts .= HTML::script('public/javascripts/prototype/prototype1.6.1.js');
  	  $this->template->global_scripts .= HTML::script('public/javascripts/prototype/scriptaculous-js-1.8.3/scriptaculous.js');
  	  $this->template->global_scripts .= HTML::script('public/javascripts/prototype/plugins/lightbox2.04/js/lightbox.js');
  	  $this->template->global_scripts .= HTML::script('public/javascripts/prototype/plugins/lightwindow/javascript/lightwindow.js');
  	  $this->template->global_scripts .= HTML::script('public/javascripts/menu.js');
  	  $this->template->unique_styles .= HTML::style('public/stylesheets/models.css');
  	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightbox2.04/css/lightbox.css');
  	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightwindow/css/lightwindow.css');
  		$this->template->globalheader = View::factory('layouts/_default/_header');
  		$this->template->globalnav = View::factory('layouts/_default/_navigation');
  		$this->template->modelnav = View::factory('layouts/_default/_model_navigation');
  		$this->template->globalfooter = View::factory('layouts/_default/_footer');
  	}
  	
  	parent::after();
  }
}