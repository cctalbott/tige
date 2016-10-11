<style type="text/css">
<!--
table {
  width: 100%;
  border: 1px solid #000;
}
th, td {
  border: 1px solid #000;
  text-align: left;
  padding: 2px 5px;
}
-->
</style>
<!--<pre>
  <?php //print_r($users); ?>
</pre>-->
<h1>Users</h1>
<a href="<?php echo URL::base(); ?>admin/user/new">New User</a>
<table>
  <tr>
    <th>fname</th>
    <th>lname</th>
    <th>email</th>
    <th>&nbsp;</th>
  </tr>
  <?php foreach($users as $user): ?>
    <tr>
      <td><?php echo $user->username; ?></td>
      <td><?php echo $user->email; ?></td>
      <td><a href="<?php echo URL::base(); ?>admin/user/show/<?php echo $user->id; ?>">show</a></td>
    </tr>
  <?php endforeach; ?>
</table>