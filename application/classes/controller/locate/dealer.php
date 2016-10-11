<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Locate_Dealer extends Controller_Application {
  /**
	 * Locator dealer index page.
	 */
	public function action_index()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Locate your local Tigé dealer.'), 'dealer, locate, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Dealer Locator");
	  $this->template->unique_styles = HTML::style('public/stylesheets/xlresults.css');
	  $this->template->unique_scripts .= HTML::script('http://app.xtremelocator.com/common/NewWindow.js');
	  
    // Google Maps API v3 \\
    $this->template->unique_scripts .= HTML::script('http://maps.google.com/maps/api/js?sensor=true');
    
	  $this->template->page_id = 'locate';
	  
	  $this->template->content = View::factory('pages/locate/dealer/index');
	  
	  // check if a zip or country has been set through the form.
	  if(isset($_REQUEST["sid"]) && isset($_REQUEST["zip"]) || isset($_REQUEST["sid"]) && isset($_REQUEST["country"])) 
	  {
	    $locator_model = Model::factory('locator');
	    $locator_model->xl_results();
	  }
	  
	  $dealer_info = 'unset';
	  
	  // check if results are returned
	  if(isset($locator_model->r) && $locator_model->r != null && count($locator_model->r) != 0)
	  {
	    $this->template->content->locate_info = View::factory('pages/locate/dealer/fragments/found');	    
	    $this->template->content->locate_info->dealerinfo = '';
	    
	    // for each result output info block
	    foreach($locator_model->r as $info) 
	    {
				$info_keys = array('Name', 'Address', 'Phone', 'tollfree', 'Fax', 'Country', 'Distance', 'Specialties', 'email', 'Url', '','_id');
				$info = array_combine($info_keys, $info);
				
				$locate_info = View::factory('pages/locate/dealer/fragments/info');
				$locate_info->info = $info;
				
				$this->template->content->locate_info->dealerinfo .= $locate_info;
			}
			$this->template->content->locate_info->dealerinfo .= '';
	  } else {
	    $this->_dealer_not_found();
	  }
	  
	  $this->template->content->contactsidebar = View::factory('pages/contact/_sidebar');
  }
  
  public function _dealer_not_found() 
  {
    $this->template->content->locate_info = View::factory('pages/locate/dealer/fragments/notfound');
	  
	  // check xtremelocator.com for country values
	  $this->template->content->locate_info->country_options = array(
			'48'  => 'China/Hong Kong',
			'78'  => 'France',
			'24'  => 'Belgium/Netherland/Luxembourg',
			'112' => 'Japan',
			'122' => 'Latvia/Lithuania/Estonia',
			'182' => 'Russian Federation',
			'200' => 'South Africa',
			'210' => 'Switzerland',
			'227' => 'United Arab Emirates',
			'228' => 'United Kingdom',
		);
  }
} // End Locate