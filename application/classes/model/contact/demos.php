<?php defined('SYSPATH') OR die('No Direct Script Access');

class Model_Contact_Demos extends ORM
{
  // Relationships
  protected $_belongs_to = array('contact_contacts' => array());
}