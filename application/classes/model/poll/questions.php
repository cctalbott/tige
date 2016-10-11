<?php defined('SYSPATH') OR die('No Direct Script Access');

class Model_Poll_Questions extends ORM 
{
  // Relationships
  protected $_has_many = array('poll_answers' => array());
  
  // Sorting
  protected $_sorting = array('id' => 'desc');
}