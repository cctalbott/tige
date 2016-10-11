<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Application {
  public $slx = 'bad';
	public $dealer, $rep, $fname, $lname, $address, $city, $state, $otherstate, $zip, $country, $otherc, $county, $phone, $email, $current_ownership, $current_boat, $model, $referral, $where, $which, $other, $brochure, $comments, $purchaseinterest, $testdrive, $quote, $WEB_FROM;
  
  /**
	 * contact index.
	 */
	public function action_index()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Contact Tigé, Give Tigé your feedback'), 'contact, feedback, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Contact");
	  $this->template->unique_styles .= HTML::style('public/javascripts/jquery/plugins/anytime/css/anytime.min.css');
	  $this->template->unique_styles .= HTML::style('public/stylesheets/contact.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/jquery/jquery-1.4.2.min.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/jquery/plugins/anytime/js/anytime.min.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/contact.js');
	  $this->template->page_id = 'contact';
		
		$this->template->content = View::factory('pages/contact/index');
		
		$this->template->content->sidebar = View::factory('pages/contact/_sidebar');
  }
  
  /**
	 * contact connect.
	 */
	public function action_connect()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Connect with Tigé. Stay up to date with the latest information.'), 'connect, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Connect");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/connect.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/contact.js');
	  $this->template->page_id = 'connect';
		
		$this->template->content = View::factory('pages/contact/connect');
  }
  
  /**
   * frequently asked questions
   */
  public function action_faq()
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé frequently asked questions.'), 'questions, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: FAQ");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/faq.css');
	  $this->template->page_id = 'faq';
		
		$this->template->content = View::factory('pages/contact/faq');
  }
  
  /**
   * careers
   */
  public function action_careers()
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Pursue a rewarding career with Tigé.'), 'career, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Careers");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/careers.css');
	  $this->template->page_id = 'careers';
		
		$this->template->content = View::factory('pages/contact/careers');
		
		$this->template->content->sidebar = View::factory('pages/contact/_sidebar');
  }
  
  /**
   * privacy
   */
  public function action_privacy()
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé respects your privacy.'), 'privacy, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Privacy");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/privacy.css');
	  $this->template->page_id = 'privacy';
		
		$this->template->content = View::factory('pages/contact/privacy');
		
		$this->template->content->sidebar = View::factory('pages/contact/_sidebar');
  }
  
  /**
   * Waterski Wakeboarding Mag request
   */
  public function action_Waterski_Wakeboard_request()
  {
    $this->template->meta = HTML::meta_helper('', 'wakeboard, waterski, request, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Waterski Wakeboard request");
	  $this->template->unique_styles .= HTML::style('public/javascripts/jquery/plugins/prettyPhoto/css/prettyPhoto.css');
	  $this->template->unique_styles .= HTML::style('public/stylesheets/wswb_request.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/jquery/jquery-1.4.2.min.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/jquery/plugins/prettyPhoto/js/jquery.prettyPhoto.js');
	  $this->template->page_id = 'privacy';
		
		$this->template->content = View::factory('pages/contact/waterski_wakeboard_request');
		
		$this->template->content->sidebar = View::factory('pages/contact/_sidebar');
  }
  
  /**
   * contact submit
   */
  public function action_submit()
  {
    $locator_model = Model::factory('locator');
    $locator_model->contactOrigin();
    
    $this->dealer = str_replace(chr(38), "_", str_replace('"', '', $locator_model->values[0]));
    $this->rep = htmlspecialchars(str_replace('"', '', $locator_model->values[1]));
    
    $this->fname = $this->_request_var('fname');
		$this->lname = $this->_request_var('lname');
		$this->address = $this->_request_var('address');
		$this->city = $this->_request_var('city');
		$this->state = $this->_request_var('state');
		$this->otherstate = $this->_request_var('otherstate');
		$this->zip = $this->_request_var('zip');
		$this->country = $this->_request_var('country');
		$this->otherc = $this->_request_var('otherc');
		$this->county = $this->_request_var('county');
		$this->phone = $this->_request_var('phone');
		$this->email = $this->_request_var('email');
		$this->current_ownership = $this->_request_var('current_ownership');
		$this->current_boat = $this->_request_var('current_boat');
		$this->model = $this->_request_var('model');
		$this->referral = $this->_request_var('referral');
		$this->other = $this->_request_var('other');
		$this->brochure = $this->_request_var('brochure');
		$this->comments = $this->_request_var('comments');
		$this->purchaseinterest = $this->_request_var('purchaseinterest');
		$this->testdrive = $this->_request_var('testdrive');
		$this->quote = $this->_request_var('quote');
		$this->WEB_FROM = $this->_request_var('WEB_FROM');
		
		$this->_insert_db_values();
  }
  
  /**
   * Contact submission successful
   */
  public function action_thanks()
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Thanks for contacting Tigé.'), 'contact, feedback, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Thanks For Contacting Tigé");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/contact.css');
	  $this->template->page_id = 'contact_thanks';
		
		$this->template->content = View::factory('pages/contact/thanks');
		
		$this->template->content->sidebar = View::factory('pages/contact/_sidebar');
  }
  
  /**
   * Contact submission failure
   */
  public function action_sorry()
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Sorry, your contact submission has failed.'), 'contact, feedback, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Sorry, Your Submission Has Failed");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/contact.css');
	  $this->template->page_id = 'contact_sorry';
		
		$this->template->content = View::factory('pages/contact/sorry');
		
		$this->template->content->sidebar = View::factory('pages/contact/_sidebar');
  }
  
  // -------- PRIVATE -------- \\
  /**
   * Setup and send saleslogix formatted email
   */
  private function _saleslogix()
  {
    $subject = "Tige.com ".$this->WEB_FROM."";
		$headers = "From: Tige Website <web@tige.com>\r";
		$message = "";
		$message .= "<?xml version=\"1.0\"?>\n";
		$message .= "<webData>\n";
		$message .= "<first_name>".ucwords($this->fname)."</first_name>\n";
		$message .= "<last_name>".ucwords($this->lname)."</last_name>\n";
		$message .= "<address>$this->address</address>\n";
		$message .= "<city>$this->city</city>\n";
		$message .= "<state>$this->state</state>\n";
		$message .= "<zip>$this->zip</zip>\n";
		$message .= "<country>$this->country</country>\n";
		$message .= "<othercountry>$this->otherc</othercountry>\n";
		$message .= "<county>$this->county</county>\n";
		$message .= "<phone>$this->phone</phone>\n";
		$message .= "<email>$this->email</email>\n";
		$message .= "<model>Boat Interest: $this->model</model>\n";
		
		if($this->referral != "")
		{
			$message .= "<heard_of_tige_from>$this->referral</heard_of_tige_from>\n";
		}
		else
		{
			$message .= "<heard_of_tige_from>Referred By: Internet</heard_of_tige_from>\n";
		}
		
		$message .= "<where>$this->where</where>\n";
		$message .= "<which>$this->which</which>\n";
		$message .= "<other>$this->other</other>\n";
		
		if($this->WEB_FROM == "BROCHURE REQUEST")
		{
			$message .= "<yes_brochure>Yes</yes_brochure>\n";
		}
		else
		{
			$message .= "<no_brochure>No</no_brochure>\n";
		}
		
		$message .= "<comments>{$this->comments}</comments>\n";
		$message .= "<dealer>$this->dealer</dealer>\n";
		$message .= "<rep>$this->rep</rep>\n";
		$message .= "</webData>\n";
		$to = 'slxleadstr@tige.com';
	  
		if(mail($to, $subject, $message, $headers))
		{
			$this->slx = 'good';
			$this->_info();
		}
		else
		{
			$this->slx = 'bad';
			$this->_info();
		}
  }
  
  /**
   * Setup and send human formatted email
   */
  private function _info()
  {
    $subject = "Tige.com ".$this->WEB_FROM."";
		$headers = "From: Tige Website <web@tige.com>\r\n";
		$message = "You received an e-mail via your website. The user submitted the following message:\n\n";
		$message .= "DEALER:  ".$this->dealer."\n";
		$message .= "REPRESENTATIVE:  ".$this->rep."\n";	
		$message .= "FIRST NAME:  ".ucwords($this->fname)."\n";	
		$message .= "LAST NAME:	  ".ucwords($this->lname)."\n";	
		$message .= "ADDRESS:  $this->address\n";
		$message .= "CITY:  $this->city\n";	
		$message .= "STATE/PROVINCE:  $this->state\n";	
		
		if($this->otherstate != '')
		{
			$message .= "STATE/PROVINCE:  $this->otherstate\n";
		}
			
		$message .= "ZIP/POSTAL:  $this->zip\n";	
		$message .= "COUNTRY:  $this->country\n";	
		
		if($this->otherc != '')
		{
			$message .= "OTHER COUNTRY:  $this->otherc\n";
		}
			
		if($this->county != '')
		{
			$message .= "COUNTY/DISTRICT:  $this->county\n";
		}
			
		if($this->phone != '')
		{
			$message .= "DAY PHONE:  $this->phone\n";
		}
		
		$message .= "E-MAIL:  $this->email\n";
		$message .= "\n\nCUSTOMER INTERESTS\n-----------------------------\n";
		
		if($this->WEB_FROM == "BROCHURE REQUEST" || $this->WEB_FROM == "REQUEST A DEMO")
		{
			$message .= "PURCHASE INTEREST: $this->purchaseinterest\n";
		}
			
		$message .= "CURRENTLY OWN A BOAT: $this->current_ownership\n";	
		$message .= "CURRENT BOAT OWNED: $this->current_boat\n";	
		
		if ($this->model != '')
		{
			$message .= "Boat Interest: $this->model\n";
		}
			
		if($this->referral != '')
		{
			$message .= "HEARD ABOUT TIGE FROM:  $this->referral";
			if($this->referral == 'Other' && $this->other != '')
			{
				$message .= " ($this->other)\n";
			} 
		}
		else
		{ 
			$message .= "HEARD ABOUT TIGE FROM:  Internet/Email";
		}
		
		if($this->brochure == 1)
		{
			$message .= "SEND BROCHURE & DVD:  Yes\n";
		} 
		else
		{
			$message .= "SEND BROCHURE & DVD:  No\n";
		}
		
		if($this->comments != '')
		{
			$message .= "\n\nCOMMENTS\n-----------------------------\n{$this->comments}\n";
		}
				
		$message = stripslashes($message);
		
		if($this->slx == 'good')
		{
		  if($this->WEB_FROM == "CUSTOMER SERVICE" && mail('customerservice@tige.com', $subject, $message, $headers))
		  {
		    $this->action_thanks();
		  }
		  else if($this->WEB_FROM == "CONNECT" && mail("meddy@tige.com", $subject, $message, $headers))
		  {
		    $this->action_thanks();
		  }
			//else if($this->WEB_FROM != "CUSTOMER SERVICE" && mail('clint@tige.com', $subject, $message, $headers))
			else if($this->WEB_FROM != "CUSTOMER SERVICE" && $this->WEB_FROM != "CONNECT" && mail('info@tige.com', $subject, $message, $headers))
			{
				$this->action_thanks(); 
			}
			else
			{
				$subject = "Tige.com ".$this->WEB_FROM."";
				$headers = "From: Tige Website info <web@tige.com>\r";
				$message = "slxleadstr was successful but info was not.";
				
				if(mail('clint@tige.com', $subject, $message, $headers))
				{
					$this->action_sorry();
				}
				else
				{
					$this->action_sorry();
				}
			}
		}
		else
		{
			mail('clint@tige.com, info@tige.com', $subject, $message, $headers);
			$subject = "Tige.com ".$this->WEB_FROM."";
			$headers = "From: Tige Website slxleadstr <web@tige.com>\r";
			$message = "slxleadstr was not successful.";
			
			if(mail('clint@tige.com', $subject, $message, $headers))
			{
				$this->action_thanks();
			}
			else
			{
				$this->action_thanks();
			}
		}
  }
  
  /**
   * Load form values into database
   */
  private function _insert_db_values()
  {
    switch($this->WEB_FROM)
    {
      case "REQUEST A BROCHURE":
        $contact_model = ORM::factory('contact_brochures');
        $contact_model->purchaseinterest = $this->purchaseinterest;
        $contact_model->model = $this->model;
        $contact_model->testdrive = $this->testdrive;
        $contact_model->quote = $this->quote;
        break;
      case "REQUEST A DEMO":
        $contact_model = ORM::factory('contact_demos');
        $contact_model->purchaseinterest = $this->purchaseinterest;
        $contact_model->model = $this->model;
        $contact_model->testdrive = $this->testdrive;
        $contact_model->quote = $this->quote;
        break;
      case "REQUEST A TOUR":
        $contact_model = ORM::factory('contact_tours');
        $contact_model->tour_date = date("Y-m-d", strtotime($this->_request_var('tour_date')));
        $contact_model->tour_time = $this->_request_var('tour_time');
        $contact_model->people = $this->_request_var('people');
        break;
      case "CUSTOMER SERVICE":
        $contact_model = ORM::factory('contact_customerservices');
        $contact_model->boat_year = $this->_request_var('boatyear');
        $contact_model->boat_model = $this->_request_var('model');
        $contact_model->comments = $this->_request_var('comments');
        break;
      case "FEEDBACK":
        $contact_model = ORM::factory('contact_feedbacks');
        $contact_model->comments = $this->_request_var('comments');
        break;
      case "CONNECT":
        $contact_model = ORM::factory('contact_connects');
        break;
      default:
        $this->action_sorry();
    }
    
    $contact_model->created_at = date("Y-m-d H:i:s", time());
    $contact_model->updated_at = $contact_model->created_at;
    
    $contact_contacts = ORM::factory('contact_contacts');
    
    $contact_contacts->created_at = date("Y-m-d H:i:s", time());
    $contact_contacts->updated_at = $contact_contacts->created_at;
    $contact_contacts->fname = $this->fname;
    $contact_contacts->lname = $this->lname;
    $contact_contacts->email = $this->email;
    $contact_contacts->address = $this->address;
    $contact_contacts->city = $this->city;
    $contact_contacts->state = $this->state;
    $contact_contacts->zip = $this->zip;
    $contact_contacts->country = $this->country;
    $contact_contacts->phone = $this->phone;
    $contact_contacts->dealer = $this->dealer;
    $contact_contacts->rep = $this->rep;
    
    if($contact_contacts->save())
    {
      $contact_model->contact_contacts = $contact_contacts;
      if($contact_model->save())
      {
        $this->_saleslogix();
        //$this->action_thanks();
      }
      else
      {
        $this->action_sorry();
      }
    }
    else
    {
      $this->action_sorry();
    }
  }
  
  /**
   * Form values parsing to variables
   */
  private function _request_var($varName, $alt='') 
	{
		global ${$varName};
		
		if(isset($_REQUEST["{$varName}"])) 
		{
			$trans = array(
				"&" => "and",
				"é" => "e"
			);
			
			${$varName} = trim(strtr($_REQUEST["{$varName}"], $trans));
			
			return ${$varName};
		} 
		else 
		{
			${$varName} = $alt;
			
			return ${$varName};
		}
	}
}