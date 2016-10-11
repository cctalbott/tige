<?php defined('SYSPATH') OR die('No Direct Script Access');

class Model_Calendar extends Model
{
  public $combined_callinks = array(); // calendar link array
  public $events_day = array(); // current day events
  private $events; // events xml
  private $result; // parsed events xml
  private $month = ''; // current month
  private $year = ''; // current year
  private $username = 'tigeftp'; // tigedealers user
	private $password = 'abilene2you'; // tigedealers password
	private $all_events = ''; // all months events
	private $callinks = array(); // days and their urls combined into an array
  
  /*
  ** query events database for events within current month
  */
  public function events_calendar_query($month = 1, $year = 2010)
	{
		$this->events = $this->_process("http://tigedealers.com/month_events_api/$year/$month");
		
		if($this->events):
			$this->result = simplexml_load_string($this->events);
		else:
			$this->result = array(array("text" => "Trouble on the western front"));
		endif;
		
		$this->month = $month;
		$this->year = $year;
		
		$this->_get_calendar_array();
	}
	
	public function event_day_query($day = 1, $month = 1, $year = 2010) 
	{
		$this->events = $this->_process("http://tigedealers.com/day_events_api/$year/$month/$day");
		
		if($this->events):
			$this->result = simplexml_load_string($this->events);
		else:
			$this->result = array(array("text" => "Trouble on the western front"));
		endif;
    
    $this->day = $day;
    $this->month = $month;
		$this->year = $year;
		
    $this->all_events = $this->result->xpath(".//event");
	  $this->events_day = $this->all_events;
	}
	
/*
** PRIVATE
*/
	/*
	** setup calendar links
	*/
	private function _get_calendar_array()
	{
	  $this->all_events = $this->result->xpath(".//event");
	    
	  foreach($this->all_events as $an_event):
	    $start_at = $an_event->xpath("./start-at");
  	  $start_at = $start_at[0];
  	  $end_at = $an_event->xpath("./end-at");
  	  $end_at = $end_at[0];
  	  
  	  $start_at = new DateTime($start_at);
  	  $start_at->setTimezone(new DateTimeZone('America/Chicago'));
  	  $start_at->setTime(0, 0, 0);
  	  $end_at = new DateTime($end_at);
  	  $end_at->setTimezone(new DateTimeZone('America/Chicago'));
  	  $end_at->setTime(0, 0, 0);
  	  
  	  $start_timestamp = strtotime($start_at->format('Y-m-d'));
      $end_timestamp = strtotime($end_at->format('Y-m-d'));
  
      $start_year = date("Y", $start_timestamp);
      $end_year = date("Y", $end_timestamp);
      $start_month = date("m", $start_timestamp);
      $end_month = date("m", $end_timestamp);
      $start_day = date("d", $start_timestamp);
      $start_day = $start_day + 1;
      $end_day = date("d", $end_timestamp);
      $end_day = $end_day + 1;
      
      if(($start_year == $this->year && $start_month == $this->month) || ($end_year == $this->year && $end_month == $this->month)):
        if($start_year == $end_year):
          if($start_month == $end_month):
            $this->_calendar_array_one($start_day, $end_day);
          else:
            if($end_month != $this->month):
              $this->_calendar_array_two($start_day);
            else:
              $this->_calendar_array_three($end_day);
            endif;
          endif;
        endif;
      endif;
    endforeach;
    
	  foreach($this->callinks as $callinks):
	    foreach($callinks as $key => $value):
	      $this->combined_callinks["$key"] = $value;
	    endforeach;
	  endforeach;
	}
	
	/*
	** if event span is within current month
	*/
	private function _calendar_array_one($start_d, $end_d)
	{
	  $days_array = array();
    $days_url_array = array();
    for($i = $start_d; $i <= $end_d; $i++):
      array_push($days_array, $i);
    endfor;
    
    foreach($days_array as $day):
      $stampeddate = strtotime($this->year."-".$this->month."-".$day);
      array_push($days_url_array, URL::base(TRUE, TRUE)."calendar_day/".date("j", $stampeddate)."/".date("n", $stampeddate)."/".date("Y", $stampeddate));
    endforeach;
     
    array_push($this->callinks, array_combine($days_array, $days_url_array));
	}
	
	/*
	** if event spans multiple months and end month is not current month
	*/
	private function _calendar_array_two($start_d)
	{
	  $days_array = array();
    $days_url_array = array();
    $days_in_month = days_in_month($this->month, $this->year) + 1;
    
    for($i = $start_d; $i < $days_in_month; $i++):
      array_push($days_array, $i);
    endfor;
    
    foreach($days_array as $day):
      $stampeddate = strtotime($this->year."-".$this->month."-".$day);
      array_push($days_url_array, URL::base(TRUE, TRUE)."calendar_day/".date("j", $stampeddate)."/".date("n", $stampeddate)."/".date("Y", $stampeddate));
    endforeach;
    
    array_push($this->callinks, array_combine($days_array, $days_url_array));
	}
	
	/*
	** if event spans multiple months and end month is current month
	*/
	private function _calendar_array_three($end_d)
	{
	  $days_array = array();
    $days_url_array = array();
    
    for($i = 1; $i <= $end_d; $i++):
      array_push($days_array, $i);
    endfor;
    
    foreach($days_array as $day):
      $stampeddate = strtotime($this->year."-".$this->month."-".$day);
      array_push($days_url_array, URL::base(TRUE, TRUE)."calendar_day/".date("j", $stampeddate)."/".date("n", $stampeddate)."/".date("Y", $stampeddate));
    endforeach;
     
    array_push($this->callinks, array_combine($days_array, $days_url_array));
	}
	
	/*
	** fetch and process xml
	*/
	private function _process($url, $postargs = false)
	{ 
		$curl_conn = curl_init();
		
	 	if($postargs !== false): 
      curl_setopt ($curl_conn, CURLOPT_POST, true); 
      curl_setopt ($curl_conn, CURLOPT_POSTFIELDS, $postargs); 
    endif;
     
		curl_setopt($curl_conn, CURLOPT_URL, $url); //URL to connect to
		//curl_setopt($curl_conn, CURLOPT_POST, 1); //Use GET method
		curl_setopt($curl_conn, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); //Use basic authentication
		curl_setopt($curl_conn, CURLOPT_USERPWD, $this->username.":".$this->password); //Set u/p
		curl_setopt($curl_conn, CURLOPT_SSL_VERIFYPEER, false); //Do not check SSL certificate (but use SSL of course), live dangerously!
		curl_setopt($curl_conn, CURLOPT_RETURNTRANSFER, 1); //Return the result as string
		
		/*
		** Result from querying URL. Will parse as xml
		*/
		$output = curl_exec($curl_conn);
		
		/*
		** close cURL resource. It's like shutting down the water when you're brushing your teeth.
		*/
		$this->responseInfo = curl_getinfo($curl_conn); 
		curl_close($curl_conn);
		
		/*
		** if success return output else return error
		*/
		if(intval($this->responseInfo['http_code']) == 200):
			return $output;
		else:
			return "Error: ".$this->responseInfo['http_code']; 
		endif;
	}
}