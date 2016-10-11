<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Application {
  /**
	 * Home page.
	 */
	public function action_index()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Tigé is a multi-sport inboard boat manufacturer. Our boats are known for their performance, style, and versatility. We feature an adjustable system that results in a hull capable of wakeboarding, wakesurfing, and waterskiing at the touch of a screen.'), 'inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé Boats, A Multi-Sport Inboard Boat Company");
	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightwindow/css/lightwindow.css');
	  $this->template->unique_styles .= HTML::style('public/stylesheets/home.css');
	  //$this->template->unique_styles .= HTML::style('public/javascripts/jquery/plugins/prettyPhoto/css/prettyPhoto.css');
	  //$this->template->unique_scripts = HTML::script('public/javascripts/jquery/plugins/prettyPhoto/js/jquery.prettyPhoto.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/swfobject20.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/lightwindow/javascript/lightwindow.js');
	  $this->template->page_id = 'welcome';
	  
	  if($this->session->get('confirmation')):
			$this->template->confirmation = "<div class='confirmation'><div>".
				$this->session->get('confirmation')."</div></div>";
			$this->session->delete('confirmation');
			$this->template->unique_scripts .= HTML::script("public/javascripts/flashdata.js");
		else:
			$this->template->confirmation = '';
		endif;
		
		$this->template->content = View::factory('pages/welcome/index');
		
		// TWITTER latest 3 from tigeboats user timeline
		$this->template->content->twitter = Twitter::tige_twitter_helper();
		
		// Get Poll Output
		$this->template->content->poll = $this->_poll_output();
	}
	
	// ---------- PRIVATE ---------- \\
	private function _poll_output()
	{
	  $poll = ORM::factory('poll_questions', 11);
	  $poll_question = HTML::entities($poll->question);
		$poll_answers = $poll->poll_answers->find_all();
		
		$output = "<p>$poll_question</p><ul>";
		foreach($poll_answers as $poll_answer):
		  $output .= "<li>";
		  $output .= Form::radio('vote', $poll_answer->id, false, array('id' => 'poll_votes_'.$poll_answer->id));
		  $output .= Form::label('poll_votes_'.$poll_answer->id, $poll_answer->answer);
		  $output .= "</li>";
		endforeach;
		$output .= "</ul>";
		
		return $output;
	}
} // End Welcome
