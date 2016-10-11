<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Performance extends Controller_Application {
  private $touchscreenInfo;
  
  /**
	 * performance index.
	 */
	public function action_index()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Handcrafted Tigé Performance.'), 'performance, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Performance");
	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightwindow/css/lightwindow.css');
	  $this->template->unique_styles .= HTML::style('public/stylesheets/performance.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/lightwindow/javascript/lightwindow.js');
	  $this->template->page_id = 'performance';
		$this->template->content = View::factory('pages/performance/index');
  }
  
  /**
	 * performance touch.
	 */
	public function action_touch()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Tigé Touch, the in–dash touchscreen for Tigé Boats.'), 'touchscreen, dash, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Tigé Touch");
	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightbox2.04/css/lightbox.css');
	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightwindow/css/lightwindow.css');
	  $this->template->unique_styles .= HTML::style('public/stylesheets/tigetouch.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/lightbox2.04/js/lightbox.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/lightwindow/javascript/lightwindow.js');
	  //$this->template->unique_scripts = HTML::script('public/javascripts/tigetouch.js');
	  $this->template->page_id = 'touch';
	  $this->template->content = View::factory('pages/performance/touch');
	  $this->_touch_content();
		$this->template->content->touchscreenInfo = $this->touchscreenInfo;
  }
  
  /**
	 * performance functional design.
	 */
	public function action_functional_design()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Tigé features a transom activity center, Alpha Z Tower, balanced floor plans, speed control, premium audio systems, storage, and the best rough–water ride.'), 'audio, speed control, storage, Alpha Z, Towers, Speedset, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Functional Design");
	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightbox2.04/css/lightbox.css');
	  $this->template->unique_styles .= HTML::style('public/stylesheets/activeft.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/lightbox2.04/js/lightbox.js');
	  $this->template->page_id = 'functionaldesign';
	  $this->template->content = View::factory('pages/performance/functional_design');
  }
  
  /**
	 * performance alpha z tower.
	 */
	public function action_alpha_z_tower()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Sculpted and engineered to fully integrate with both Tigé styling and our superior structure, the Alpha Z clearly sets a new standard in tower design and functionality.'), 'Alpha Z, Towers, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Alpha Z Tower");
	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightbox2.04/css/lightbox.css');
	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightwindow/css/lightwindow.css');
	  $this->template->unique_styles .= HTML::style('public/stylesheets/alphaz.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/lightbox2.04/js/lightbox.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/lightwindow/javascript/lightwindow.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/gallery.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/alphaz.js');
	  $this->template->page_id = 'alphaztower';
	  $this->template->content = View::factory('pages/performance/alpha_z_tower');
  }
  
  /**
	 * performance audio.
	 */
	public function action_audio()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Tigé teamed with WetSounds to bring the best in marine audio to the market.'), 'audio, wet sounds, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Wet Sounds Audio");
	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightbox2.04/css/lightbox.css');
	  $this->template->unique_styles .= HTML::style('public/stylesheets/audio.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/lightbox2.04/js/lightbox.js');
	  $this->template->page_id = 'wetsoundsaudio';
	  $this->template->content = View::factory('pages/performance/wet_sounds_audio');
  }
  
  /**
	 * performance engines.
	 */
	public function action_engines()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Tigé uses PCM Marine engines, the most reliable inboard power train on the market.'), 'pcm, engines, powertrain, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: PCM Engines");
	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightbox2.04/css/lightbox.css');
	  $this->template->unique_styles .= HTML::style('public/stylesheets/engines.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/lightbox2.04/js/lightbox.js');
	  $this->template->page_id = 'pcmengines';
	  $this->template->content = View::factory('pages/performance/pcm_engines');
  }
  
  /**
	 * performance convexv.
	 */
	public function action_convexv()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Tigé Convex V and TAPS2 technology gives our boats full trim capability.'), 'convex v, taps2, hull, trim, wake, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Convex V/TAPS2");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/convex.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/swfobject20.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/convex.js');
	  $this->template->page_id = 'convexv';
	  $this->template->content = View::factory('pages/performance/convexv');
  }
  
  /**
	 * performance warranty.
	 */
	public function action_warranty()
	{
	  $this->template->meta = HTML::meta_helper(HTML::entities('Tigé LifePlus Lifetime Replacement Warranty is the only replacement warranty in the industry.'), 'warranty, lifetime, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Lifetime Warranty");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/warranty.css');
	  $this->template->page_id = 'warranty';
	  $this->template->content = View::factory('pages/performance/warranty');
  }
  
  /**
	 * performance ballast.
	 */
	public function action_ballast()
	{
	  $this->template->meta = HTML::meta_helper('Ballast options.', 'ballast, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Ballast Options");
	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightbox2.04/css/lightbox.css');
	  $this->template->unique_styles .= HTML::style('public/javascripts/prototype/plugins/lightwindow/css/lightwindow.css');
	  $this->template->unique_styles .= HTML::style('public/stylesheets/ballast.css');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/lightbox2.04/js/lightbox.js');
	  $this->template->unique_scripts .= HTML::script('public/javascripts/prototype/plugins/lightwindow/javascript/lightwindow.js');
	  $this->template->page_id = 'ballast';
	  $this->template->content = View::factory('pages/performance/ballast');
  }
  
  private function _touch_content()
  {
    switch($this->request->param('section'))
    {
      case "speedset":
        $this->touchscreenInfo = View::factory('pages/performance/touch/speedset');
        $this->template->content->icon_script = '$("iconsPointer").setStyle({left: "27px"});';
        $this->template->content->icon_script .= '$("speedsetIcon").addClassName("active");';
        break;
      case "audio":
        $this->touchscreenInfo = View::factory('pages/performance/touch/audio');
        $this->template->content->icon_script = '$("iconsPointer").setStyle({left: "140px"});';
        $this->template->content->icon_script .= '$("audioIcon").addClassName("active");';
        break;
      case "gauges":
        $this->touchscreenInfo = View::factory('pages/performance/touch/gauges');
        $this->template->content->icon_script = '$("iconsPointer").setStyle({left: "250px"});';
        $this->template->content->icon_script .= '$("gaugesIcon").addClassName("active");';
        break;
      case "depth":
        $this->touchscreenInfo = View::factory('pages/performance/touch/depth');
        $this->template->content->icon_script = '$("iconsPointer").setStyle({left: "360px"});';
        $this->template->content->icon_script .= '$("depthIcon").addClassName("active");';
        break;
      case "profiles":
        $this->touchscreenInfo = View::factory('pages/performance/touch/profiles');
        $this->template->content->icon_script = '$("iconsPointer").setStyle({left: "470px"});';
        $this->template->content->icon_script .= '$("profilesIcon").addClassName("active");';
        break;
      case "lights":
        $this->touchscreenInfo = View::factory('pages/performance/touch/lights');
        $this->template->content->icon_script = '$("iconsPointer").setStyle({left: "580px"});';
        $this->template->content->icon_script .= '$("lightsIcon").addClassName("active");';
        break;
      case "switches":
        $this->touchscreenInfo = View::factory('pages/performance/touch/switches');
        $this->template->content->icon_script = '$("iconsPointer").setStyle({left: "690px"});';
        $this->template->content->icon_script .= '$("switchesIcon").addClassName("active");';
        break;
      default:
        $this->touchscreenInfo = View::factory('pages/performance/touch/speedset');
        $this->template->content->icon_script = '$("iconsPointer").setStyle({left: "27px"});';
        $this->template->content->icon_script .= '$("speedsetIcon").addClassName("active");';
    }
    
    $this->touchscreenInfo->touchscreengallery = View::factory('pages/performance/touch/content_gallery');
    $this->touchscreenInfo->sidebar = View::factory('pages/performance/touch/sidebar');
  }
}