<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Calendar_Day extends Controller_Blank {
  
  /*
  ** single day popup
  */
  public function action_index()
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Event'), 'events, sport, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Event");
	  //$this->template->unique_styles = HTML::style('public/stylesheets/event.css');
	  $this->template->page_id = 'calendar_day';
	  
	  $this->template->content = View::factory('pages/lifestyle/event_day');
		
		if($this->request->param('year')):
			$this->year = $this->request->param('year');
		else:
			$this->year = date('Y');
		endif;
		
		if($this->request->param('month')):
			$this->month = $this->request->param('month'); 
		else:
			$this->month = date('n');
		endif;
		
		if($this->request->param('day')):
			$this->day = $this->request->param('day');
		else:
			$this->day = date('j');
		endif;
		
		$calendar_model = Model::factory('calendar');
		$calendar_model->event_day_query($this->day, $this->month, $this->year);
		$this->template->content->days_events = $calendar_model->events_day;
  }
}