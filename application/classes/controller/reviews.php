<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reviews extends Controller_Application {
  /**
	 * reviews index.
	 */
	public function action_index()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Expert reviews of Tigé Boats.'), 'reviews, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Reviews");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/reviews.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/reviews.js');
	  $this->template->page_id = 'reviews';
		$this->template->content = View::factory('pages/reviews/index');
  }
}