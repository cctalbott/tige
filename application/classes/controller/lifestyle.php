<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Lifestyle extends Controller_Application {
  private $calendar_template, $month, $year; // calendar layout, current month, and current year
  
  /*
	** lifestyle index.
	*/
	public function action_index()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Experience The Tigé Lifestyle.'), 'lifestyle, culture, experience, events, sport, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Lifestyle");
	  $this->template->unique_styles = HTML::style('public/stylesheets/lifestyle.css');
	  $this->template->unique_styles .= HTML::style('public/stylesheets/prototype_plugins/livepipe/window.css');
	  $this->template->unique_scripts = HTML::script('public/javascripts/prototype/plugins/livepipe/livepipe.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/livepipe/window.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/galleries.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/team.js');
	  $this->template->page_id = 'lifestyle';
		
		$this->template->content = View::factory('pages/lifestyle/index');
		
		$this->template->content->uri = $this->request->uri;
		//$selected_date = $this->uri->uri_to_assoc();
		
		if(isset($_GET['month'])):
			$this->month = $_GET['month']; 
		else:
			$this->month = date('n');
		endif;
		
		if(isset($_GET['year'])):
			$this->year = $_GET['year'];
		else:
			$this->year = date('Y');
		endif;
		
		$day = date('j');
		
		$calendar_model = Model::factory('calendar');
		$calendar_model->events_calendar_query($this->month, $this->year);
		$calendar_data = $calendar_model->combined_callinks;
		
		//$calendar = new Calendar($this->month, $this->year);
		$calendar = new Calendar(Arr::get($_GET, 'month', date('m')), Arr::get($_GET, 'year', date('Y')));
		
		$month = $this->month;
		foreach($calendar_data as $key => $value):
		  $calendar->attach($calendar->event()
		    ->condition('year', $this->year)
		    ->condition('month', $this->month)
		    ->condition('day', $key)
		    ->output(HTML::anchor($value, $key, array(
		      'rel' => 'day_popup'
		    )))
		  );
		endforeach;
		
	  $this->template->content->calendar = $calendar->render('pages/lifestyle/_calendar');
  }
}