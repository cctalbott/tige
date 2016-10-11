<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tour extends Controller_Application {
  
  public function action_index()
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tour the state–of–the–art Tigé headquarters.'), 'tour, factory, molds, lamination, fiberglass, electronics, powerplant, interiors, tower, testing, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Tour");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/tour.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/swfobject20.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/tour.js');
	  $this->template->page_id = 'tour';
		$this->template->content = View::factory('pages/tour/index');
  }
}