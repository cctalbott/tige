<h1>New User</h1>
<form action="<?php echo URL::base(); ?>admin/user/create" method="post" accept-charset="utf-8">
  <fieldset>
    <legend>Add a user</legend>
    <label for="email">Email</label>
    <input name="email" value=""><br>
    <label for="username">Username</label>
    <input name="username" value=""><br>
    <label for="password">Password</label>
    <input name="password" value=""><br>
    <label for="password_confirm">Confirm Password</label>
    <input name="password_confirm" value=""><br>
    <label for="role">Role</label>
    <select name="role">
      <?php foreach($roles as $role): ?>
        <option value="<?php echo $role->name; ?>"><?php echo $role->name; ?></option>
      <?php endforeach; ?>
    </select><br>
    <input type="submit" name="add_user" value="Add User">
  </fieldset>
</form>