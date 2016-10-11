<h1>User <?php echo $user->username; ?></h1>
<dl>
  <dt>Email</dt>
  <dd><?php echo $user->email; ?></dd>
  <dt>Roles</dt>
  <?php foreach($user->roles->find_all() as $role): ?>
    <dd><?php echo $role->name; ?></dd>
  <?php endforeach; ?>
</dl>
<h2>Manage User</h2>
<p><a href="<?php echo URL::base(); ?>admin/user/edit/<?php echo $user->id; ?>">edit</a> | <a href="<?php echo URL::base(); ?>admin/user/destroy/<?php echo $user->id; ?>">destroy</a></p>