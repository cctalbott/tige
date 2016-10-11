<?php defined('SYSPATH') OR die('No Direct Script Access');

class Model_Contact_Contacts extends ORM
{
  // Relationships
  protected $_has_many = array(
    'contact_brochures' => array(),
    'contact_demos' => array(),
    'contact_tours' => array(),
    'contact_customerservices' => array(),
    'contact_feedbacks' => array(),
    'contact_connects' => array()
  );
}