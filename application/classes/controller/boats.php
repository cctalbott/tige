<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Boats extends Controller_Boatstemplate {
  
  
  /**
   * RZ4
   */
  public function action_rz4()
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé RZ4, 24 foot pickle fork V drive.'), 'RZ4, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: RZ4");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/models/rz4.css');
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/models.js");
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/rz4.js");
	  $this->template->page_id = 'rz4';
		
		$this->template->content = View::factory('pages/boats/rz4');
		
		$boat_model = ORM::factory('boat')->where('name', '=', 'RZ4')->find();
		
		$this->template->content->specs = array(
		  "Length: ".$boat_model->length,
		  "Beam: ".$boat_model->beam_length,
		  "Seating Capacity: ".$boat_model->seating,
		  "Fuel Capacity: ".$boat_model->fuel." gal.",
		  "Weight: ".Num::format($boat_model->weight, 0)." lbs."
		);
		
		$images_basedir = 'public/images/models/';
		$this->template->content->contentGallery = array();
		
		$boat_model->get_images("RZ4");
    
    foreach($boat_model->images as $image)
    {
      array_push($this->template->content->contentGallery, 
        HTML::file_anchor(
          $images_basedir.$image->medium, 
          HTML::image(
            $images_basedir.$image->small,
            array(
              'alt' => 'RZ4',
              'width' => '110',
              'height' => '63'
            )
          ),
          array(
            'rel' => 'lightbox[boat]',
            'title' => "<a href='".URL::base().$images_basedir.$image->large."' target='_blank'>High Resolution</a>"
          )
        )
      );
    }
  }
  
  /**
   * RZ2
   */
  public function action_rz2()
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé RZ2, 22 foot pickle fork V drive.'), 'RZ2, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: RZ2");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/models/rz2.css');
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/models.js");
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/rz2.js");
	  $this->template->page_id = 'rz2';
		$this->template->content = View::factory('pages/boats/rz2');
		
		// Get boat specs
		$boat_model = ORM::factory('boat')->where('name', '=', 'RZ2')->find();
		
		$this->template->content->specs = array(
		  "Length: ".$boat_model->length,
		  "Beam: ".$boat_model->beam_length,
		  "Seating Capacity: ".$boat_model->seating,
		  "Fuel Capacity: ".$boat_model->fuel." gal.",
		  "Weight: ".Num::format($boat_model->weight, 0)." lbs."
		);
		
		// Get images for gallery
		$images_basedir = 'public/images/models/';
		$this->template->content->contentGallery = array();
		
		$boat_model->get_images("RZ2");
    
    foreach($boat_model->images as $image)
    {
      array_push($this->template->content->contentGallery, 
        HTML::file_anchor(
          $images_basedir.$image->medium, 
          HTML::image(
            $images_basedir.$image->small,
            array(
              'alt' => 'RZ2',
              'width' => '110',
              'height' => '63'
            )
          ),
          array(
            'rel' => 'lightbox[boat]',
            'title' => "<a href='".URL::base().$images_basedir.$image->large."' target='_blank'>High Resolution</a>"
          )
        )
      );
    }
  }
  
  /**
   * RZR
   */
  public function action_rzr() 
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé RZR, 20 foot V drive'), 'RZR, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: RZR");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/models/rzr.css');
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/models.js");
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/rzr.js");
	  $this->template->page_id = 'rzr';
		$this->template->content = View::factory('pages/boats/rzr');
		
		// Get boat specs
		$boat_model = ORM::factory('boat')->where('name', '=', 'RZR')->find();
		
		$this->template->content->specs = array(
		  "Length: ".$boat_model->length,
		  "Beam: ".$boat_model->beam_length,
		  "Seating Capacity: ".$boat_model->seating,
		  "Fuel Capacity: ".$boat_model->fuel." gal.",
		  "Weight: ".Num::format($boat_model->weight, 0)." lbs."
		);
		
		// Get images for gallery
		$images_basedir = 'public/images/models/';
		$this->template->content->contentGallery = array();
		
		$boat_model->get_images("RZR");
    
    foreach($boat_model->images as $image)
    {
      array_push($this->template->content->contentGallery, 
        HTML::file_anchor(
          $images_basedir.$image->medium, 
          HTML::image(
            $images_basedir.$image->small,
            array(
              'alt' => 'RZR',
              'width' => '110',
              'height' => '63'
            )
          ),
          array(
            'rel' => 'lightbox[boat]',
            'title' => "<a href='".URL::base().$images_basedir.$image->large."' target='_blank'>High Resolution</a>"
          )
        )
      );
    }
  }
  
  /**
   * Z1
   */
  public function action_z1() 
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé Z1, 21 foot V drive.'), 'Z1, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: Z1");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/models/z1.css');
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/models.js");
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/z1.js");
	  $this->template->page_id = 'z1';
		$this->template->content = View::factory('pages/boats/z1');
		
		// Get boat specs
		$boat_model = ORM::factory('boat')->where('name', '=', 'Z1')->find();
		
		$this->template->content->specs = array(
		  "Length: ".$boat_model->length,
		  "Beam: ".$boat_model->beam_length,
		  "Seating Capacity: ".$boat_model->seating,
		  "Fuel Capacity: ".$boat_model->fuel." gal.",
		  "Weight: ".Num::format($boat_model->weight, 0)." lbs."
		);
		
		// Get images for gallery
		$images_basedir = 'public/images/models/';
		$this->template->content->contentGallery = array();
		
		$boat_model->get_images("Z1");
    
    foreach($boat_model->images as $image)
    {
      array_push($this->template->content->contentGallery, 
        HTML::file_anchor(
          $images_basedir.$image->medium, 
          HTML::image(
            $images_basedir.$image->small,
            array(
              'alt' => 'Z1',
              'width' => '110',
              'height' => '63'
            )
          ),
          array(
            'rel' => 'lightbox[boat]',
            'title' => "<a href='".URL::base().$images_basedir.$image->large."' target='_blank'>High Resolution</a>"
          )
        )
      );
    }
  }
  
  /**
   * R20
   */
  public function action_r20() 
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé R20, 20 foot V drive.'), 'R20, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: R20");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/models/r20.css');
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/models.js");
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/r20.js");
	  $this->template->page_id = 'r20';
		$this->template->content = View::factory('pages/boats/r20');
		
		// Get boat specs
		$boat_model = ORM::factory('boat')->where('name', '=', 'R20')->find();
		
		$this->template->content->specs = array(
		  "Length: ".$boat_model->length,
		  "Beam: ".$boat_model->beam_length,
		  "Seating Capacity: ".$boat_model->seating,
		  "Fuel Capacity: ".$boat_model->fuel." gal.",
		  "Weight: ".Num::format($boat_model->weight, 0)." lbs."
		);
		
		// Get images for gallery
		$images_basedir = 'public/images/models/';
		$this->template->content->contentGallery = array();
		
		$boat_model->get_images("R20");
    
    foreach($boat_model->images as $image)
    {
      array_push($this->template->content->contentGallery, 
        HTML::file_anchor(
          $images_basedir.$image->medium, 
          HTML::image(
            $images_basedir.$image->small,
            array(
              'alt' => 'R20',
              'width' => '110',
              'height' => '63'
            )
          ),
          array(
            'rel' => 'lightbox[boat]',
            'title' => "<a href='".URL::base().$images_basedir.$image->large."' target='_blank'>High Resolution</a>"
          )
        )
      );
    }
  }
  
  /**
   * 24Vé
   */
  public function action_24ve() 
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé 24Vé, 24 foot V drive.'), '24Vé, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: 24Vé");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/models/ve24.css');
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/models.js");
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/ve24.js");
	  $this->template->page_id = 've24';
		$this->template->content = View::factory('pages/boats/ve24');
		
		// Get boat specs
		$boat_model = ORM::factory('boat')->where('name', '=', '24Vé')->find();
		
		$this->template->content->specs = array(
		  "Length: ".$boat_model->length,
		  "Beam: ".$boat_model->beam_length,
		  "Seating Capacity: ".$boat_model->seating,
		  "Fuel Capacity: ".$boat_model->fuel." gal.",
		  "Weight: ".Num::format($boat_model->weight, 0)." lbs."
		);
		
		// Get images for gallery
		$images_basedir = 'public/images/models/';
		$this->template->content->contentGallery = array();
		
		$boat_model->get_images("24Vé");
    
    foreach($boat_model->images as $image)
    {
      array_push($this->template->content->contentGallery, 
        HTML::file_anchor(
          $images_basedir.$image->medium, 
          HTML::image(
            $images_basedir.$image->small,
            array(
              'alt' => '24V&eacute;',
              'width' => '110',
              'height' => '63'
            )
          ),
          array(
            'rel' => 'lightbox[boat]',
            'title' => "<a href='".URL::base().$images_basedir.$image->large."' target='_blank'>High Resolution</a>"
          )
        )
      );
    }
  }
  
  /**
   * 22Vé
   */
  public function action_22ve() 
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé 22Vé, 22 foot V drive.'), '22Vé, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: 22Vé");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/models/ve22.css');
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/models.js");
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/ve22.js");
	  $this->template->page_id = 've22';
		$this->template->content = View::factory('pages/boats/ve22');
		
		// Get boat specs
		$boat_model = ORM::factory('boat')->where('name', '=', '22Vé')->find();
		
		$this->template->content->specs = array(
		  "Length: ".$boat_model->length,
		  "Beam: ".$boat_model->beam_length,
		  "Seating Capacity: ".$boat_model->seating,
		  "Fuel Capacity: ".$boat_model->fuel." gal.",
		  "Weight: ".Num::format($boat_model->weight, 0)." lbs."
		);
		
		// Get images for gallery
		$images_basedir = 'public/images/models/';
		$this->template->content->contentGallery = array();
		
		$boat_model->get_images("22Vé");
    
    foreach($boat_model->images as $image)
    {
      array_push($this->template->content->contentGallery, 
        HTML::file_anchor(
          $images_basedir.$image->medium, 
          HTML::image(
            $images_basedir.$image->small,
            array(
              'alt' => '22V&eacute;',
              'width' => '110',
              'height' => '63'
            )
          ),
          array(
            'rel' => 'lightbox[boat]',
            'title' => "<a href='".URL::base().$images_basedir.$image->large."' target='_blank'>High Resolution</a>"
          )
        )
      );
    }
  }
  
  /**
   * 22i
   */
  public function action_22i() 
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé 22i, 22 foot i drive.'), '22i, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: 22i");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/models/i22.css');
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/models.js");
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/i22.js");
	  $this->template->page_id = 'i22';
		$this->template->content = View::factory('pages/boats/i22');
		
		// Get boat specs
		$boat_model = ORM::factory('boat')->where('name', '=', '22i')->find();
		
		$this->template->content->specs = array(
		  "Length: ".$boat_model->length,
		  "Beam: ".$boat_model->beam_length,
		  "Seating Capacity: ".$boat_model->seating,
		  "Fuel Capacity: ".$boat_model->fuel." gal.",
		  "Weight: ".Num::format($boat_model->weight, 0)." lbs."
		);
		
		// Get images for gallery
		$images_basedir = 'public/images/models/';
		$this->template->content->contentGallery = array();
		
		$boat_model->get_images("22i");
    
    foreach($boat_model->images as $image)
    {
      array_push($this->template->content->contentGallery, 
        HTML::file_anchor(
          $images_basedir.$image->medium, 
          HTML::image(
            $images_basedir.$image->small,
            array(
              'alt' => '22i',
              'width' => '110',
              'height' => '63'
            )
          ),
          array(
            'rel' => 'lightbox[boat]',
            'title' => "<a href='".URL::base().$images_basedir.$image->large."' target='_blank'>High Resolution</a>"
          )
        )
      );
    }
  }
  
  /**
   * 20V
   */
  public function action_20v() 
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé 20V, 20 foot V drive.'), '20V, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: 20V");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/models/v20.css');
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/models.js");
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/v20.js");
	  $this->template->page_id = 'v20';
		$this->template->content = View::factory('pages/boats/v20');
		
		// Get boat specs
		$boat_model = ORM::factory('boat')->where('name', '=', '20V')->find();
		
		$this->template->content->specs = array(
		  "Length: ".$boat_model->length,
		  "Beam: ".$boat_model->beam_length,
		  "Seating Capacity: ".$boat_model->seating,
		  "Fuel Capacity: ".$boat_model->fuel." gal.",
		  "Weight: ".Num::format($boat_model->weight, 0)." lbs."
		);
		
		// Get images for gallery
		$images_basedir = 'public/images/models/';
		$this->template->content->contentGallery = array();
		
		$boat_model->get_images("20V");
    
    foreach($boat_model->images as $image)
    {
      array_push($this->template->content->contentGallery, 
        HTML::file_anchor(
          $images_basedir.$image->medium, 
          HTML::image(
            $images_basedir.$image->small,
            array(
              'alt' => '20V',
              'width' => '110',
              'height' => '63'
            )
          ),
          array(
            'rel' => 'lightbox[boat]',
            'title' => "<a href='".URL::base().$images_basedir.$image->large."' target='_blank'>High Resolution</a>"
          )
        )
      );
    }
  }
  
  /**
   * 20i
   */
  public function action_20i() 
  {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé 20i, 20 foot i drive.'), '20i, inboard, boat, wakeboard, waterski, wakesurf, manufacturer');
	  $this->template->title = HTML::entities("Tigé.com: 20i");
	  $this->template->unique_styles .= HTML::style('public/stylesheets/models/i20.css');
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/models.js");
	  $this->template->unique_scripts .= HTML::script("public/javascripts/models/i20.js");
	  $this->template->page_id = 'i20';
		$this->template->content = View::factory('pages/boats/i20');
		
		// Get boat specs
		$boat_model = ORM::factory('boat')->where('name', '=', '20i')->find();
		
		$this->template->content->specs = array(
		  "Length: ".$boat_model->length,
		  "Beam: ".$boat_model->beam_length,
		  "Seating Capacity: ".$boat_model->seating,
		  "Fuel Capacity: ".$boat_model->fuel." gal.",
		  "Weight: ".Num::format($boat_model->weight, 0)." lbs."
		);
		
		// Get images for gallery
		$images_basedir = 'public/images/models/';
		$this->template->content->contentGallery = array();
		
		$boat_model->get_images("20i");
    
    foreach($boat_model->images as $image)
    {
      array_push($this->template->content->contentGallery, 
        HTML::file_anchor(
          $images_basedir.$image->medium, 
          HTML::image(
            $images_basedir.$image->small,
            array(
              'alt' => '20i',
              'width' => '110',
              'height' => '63'
            )
          ),
          array(
            'rel' => 'lightbox[boat]',
            'title' => "<a href='".URL::base().$images_basedir.$image->large."' target='_blank'>High Resolution</a>"
          )
        )
      );
    }
  }
}