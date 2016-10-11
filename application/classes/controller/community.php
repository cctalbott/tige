<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Community extends Controller_Application {
  /**
	 * community index.
	 */
	public function action_index()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Experience The Tigé Community'), 'community, culture, experience, events, sport, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Community");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/community.css');
	  $this->template->page_id = 'community';
		
		$this->template->content = View::factory('pages/community/index');
		
		// TWITTER latest 3 from tigeboats user timeline
		//$this->template->content->twitter = Twitter::tige_twitter_helper();
  }
  
  /**
	 * community downloads.
	 */
	public function action_downloads()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Download Tigé manuals, brochures, desktops, spec sheets, and other media. Links to other water sports sites.'), 'downloads, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Downloads");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/downloads.css');
	  $this->template->page_id = 'downloads';
	  $this->template->content = View::factory('pages/community/downloads');
  }
}