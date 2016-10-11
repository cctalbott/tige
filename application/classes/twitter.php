<?php defined('SYSPATH') or die('No direct access allowed.');

class Twitter extends Twitter_Core
{
  /**
	 * Outputs latest 3 Tigé Tweets
	 */
  public static function tige_twitter_helper()
  {
    // TWITTER latest 3 from tigeboats user timeline
    $twitter_cache = Cache::instance('sqlite');
    if($twitter_cache->get('twitter'))
    {
      $twitter_cached = $twitter_cache->get('twitter');
    }
    else
    {
      $twitter = Twitter::instance(array('version' => true))
        ->setResource('statuses/user_timeline/userIDHere')
        ->setFormat('xml')
        ->setParams(array('count' => 3))
        ->execute();
    
      $twitter_cache->set('twitter', $twitter, 1000);
      
      $twitter_cached = $twitter_cache->get('twitter');
    }
    
    $twitter_results = simplexml_load_string($twitter_cached);
    $twitter_parsed = array();
    
    if(count($twitter_results) > 1)
    {
		  foreach($twitter_results as $result)
  		{
  			$tweet = $result->text;
  			array_push($twitter_parsed, $tweet);
  		}
  	
      $list = "<ul>\n";
      foreach($twitter_parsed as $item)
      {
        $list .= "<li>".Text::auto_link($item)."</li>";
      }
      $list .= "</ul>\n";
    }
    else
    {
      $list = "<p>The latest from Tig&eacute; is at twitter.</p>";
    }
    
    return $list;
  }
}