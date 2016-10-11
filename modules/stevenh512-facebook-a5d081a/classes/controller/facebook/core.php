<?php defined('SYSPATH') OR die('No direct access allowed.');

include_once Kohana::find_file('vendor', 'facebook');

class Controller_Facebook_Core extends Controller {
	protected $config;
	protected $data;
	protected $fb;
	protected $uid;
	protected $user;
	
	__construct() {
		parent::__construct();
		
		$this->config = Kohana::config('facebook')->get('api');
		$this->data['appId'] = $this->config['appId'];
		$this->fb = new Facebook($this->config);
		$this->uid = $this->fb->getUser();
		$this->user = $this->fb->api('/me');
	}
}
