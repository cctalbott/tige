<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Demo extends Controller_Application {
  /**
   * Demo index
   */
  public function action_index()
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('The best way know about any product is the experience it for yourself. That’s why we encourage you to spend a day in Tigé.'), 'demo, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Demo");
	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightwindow/css/lightwindow.css');
	  $this->template->unique_styles .= HTML::style('public/stylesheets/demo.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/lightwindow/javascript/lightwindow.js');
	  $this->template->page_id = 'demo';
	  $this->template->content = View::factory('pages/demo/index');
  }
}