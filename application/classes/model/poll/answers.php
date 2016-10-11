<?php defined('SYSPATH') OR die('No Direct Script Access');

class Model_Poll_Answers extends ORM 
{
  // Relationships
  protected $_belongs_to = array('poll_questions' => array());
  
}