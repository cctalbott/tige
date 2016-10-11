<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_User extends Controller_Admin_Application {
  
  /**
	 * user admin index.
	 */
  public function action_index() {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé User Admin. View and manage users.'), 'users, admin');
	  $this->template->title = HTML::entities("Tigé.com: User Admin");
	  $this->template->page_id = 'user_admin';
	  $this->template->content = View::factory('pages/admin/user/index');
	  
	  $users = ORM::factory('users');
	  
	  $this->template->content->users = $users->find_all();
  }
  
  /**
	 * user admin show.
	 */
  public function action_show() {
    $this->template->meta = HTML::meta_helper(HTML::entities('Tigé User Admin. View and manage users.'), 'users, admin');
	  $this->template->title = HTML::entities("Tigé.com: User Admin");
	  $this->template->page_id = 'user_show';
	  $this->template->content = View::factory('pages/admin/user/show');
	  
	  $user = ORM::factory('user');
	  
	  $this->template->content->user = $user->find($this->request->param('id'));
  }
  
  /**
	 * user admin new.
	 */
  public function action_new() {
    $this->template->meta = HTML::meta_helper(HTML::entities('Add Tigé User. Add users.'), 'users, admin, new');
	  $this->template->title = HTML::entities("Tigé.com: Add User");
	  $this->template->page_id = 'user_new';
	  $this->template->content = View::factory('pages/admin/user/new');
	  
	  $roles = ORM::factory('role');
	  
	  $this->template->content->roles = $roles->find_all(); 
  }
  
  /**
	 * user admin create.
	 */
  public function action_create() {
    $user = ORM::factory('user');
    
    $user->email = $_POST['email'];
    $user->username = $_POST['username'];
    $user->password = $_POST['password'];
    
    if($user->save())
    {
      if($user->add('roles', ORM::factory('role', array('name' => $_POST['role']))))
      {
        $this->action_show($user->id);
      }
      else
      {
        $this->action_new();
      }
    }
    else
    {
      $this->action_new();
    } 
  }
  
  /**
	 * user admin edit.
	 */
  public function action_edit() {
    $this->template->meta = HTML::meta_helper(HTML::entities('Edit Tigé User. Edit users.'), 'users, admin, edit');
	  $this->template->title = HTML::entities("Tigé.com: Edit User");
	  $this->template->page_id = 'user_new';
	  $this->template->content = View::factory('pages/admin/user/edit');
	  
	  $roles = ORM::factory('role');
	  
	  $this->template->content->roles = $roles->find_all(); 
  }
  
  /**
	 * user admin update.
	 */
  public function action_update() {
    $user = ORM::factory('user');
    
    if(isset($_POST['email']))
    {
      $user->email = $_POST['email'];
    }
    
    if(isset($_POST['username']))
    {
      $user->username = $_POST['username'];
    }
    
    if(isset($_POST['password']))
    {
      $user->password = $_POST['password'];
    }
    
    if($user->save())
    {
      $user->remove('roles', ORM::factory('role'))
      if($user->add('roles', ORM::factory('role', array('name' => $_POST['role']))))
      {
        $this->action_show($user->id);
      }
      else
      {
        $this->action_new();
      }
    }
    else
    {
      $this->action_new();
    } 
  }
}