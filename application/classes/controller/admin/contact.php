<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Contact extends Controller_Admin_Application {
  
  /**
	 * contact admin index.
	 */
  public function action_index() {
    $this->template->meta = HTML::meta_helper(HTML::entities('Contact Tigé Admin. View submitted Tigé contacts'), 'contact, feedback, admin');
	  $this->template->title = HTML::entities("Tigé.com: Contact Admin");
	  $this->template->page_id = 'contact_admin';
	  $this->template->content = View::factory('pages/admin/contact/index');
	  
	  $contact_customerservices = ORM::factory('contact_customerservices');
	  $contact_demos = ORM::factory('contact_demos');
	  $contact_brochures = ORM::factory('contact_brochures');
	  $contact_feedbacks = ORM::factory('contact_feedbacks');
	  $contact_tours = ORM::factory('contact_tours');
	  $contact_connects = ORM::factory('contact_connects');
	  
	  $this->template->content->customerservices = $contact_customerservices->find_all();
	  $this->template->content->demos = $contact_demos->find_all();
	  $this->template->content->brochures = $contact_brochures->find_all();
	  $this->template->content->feedbacks = $contact_feedbacks->find_all();
	  $this->template->content->tours = $contact_tours->find_all();
	  $this->template->content->connects = $contact_connects->find_all();
	  
  }
}