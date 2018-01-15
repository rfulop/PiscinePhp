<?php
require_once("session.php");
  if ($_POST['submit'] === "OK" && $_POST['setAdmin'])
  {
    $users = unserialize(file_get_contents("dbs/users"));
    $i = 0;
    foreach ($users as $user)
    {
        if ($user['login'] === $_POST['setAdmin'])
          $users[$i]['priv'] = 'admin';

      $i++;
      }
      file_put_contents("dbs/users", serialize($users));
  }

  if($_POST['delUser'] && $_POST['delete'] === "OK")
  {
    $users = unserialize(file_get_contents("dbs/users"));

    foreach ($users as $user)
    {
      if ($_POST['delUser'] != $user['login'])
        $newusers[] = $user;
    }
    file_put_contents("dbs/users", serialize($newusers));
  }

?>

<?php
include 'header.php';
include 'navTop.php';
 ?>

<h1>Admin accounts</h1>

<h2>Set user as admin</h2>
  <form method="post" action="admin_accounts.php">
    <label for="setAdmin">Set user as admin</label><br />
      <select name="setAdmin">
<?php
  $users = unserialize(file_get_contents("dbs/users"));
  foreach ($users as $user)
  {
    if ($user['priv'] === 'user')
      echo "<option value='".$user['login']."'>".$user['login']."</option>";
  }
  ?>
        <input type="submit" name="submit" value="OK" />
      </select>
    </form>

<h2>Delete user</h2>
    <form method="post" action="admin_accounts.php">
      <label for="delUser">Delete user</label><br />
          <select name="delUser">
    <?php
      $cats = unserialize(file_get_contents("dbs/users"));
      foreach ($users as $user)
      {
        if ($user['priv'] === 'user')
          echo "<option value='".$user['login']."'>".$user['login']."</option>";
      }
      ?>
          <input type="submit" name="delete" value="OK" />
        </select>
      </form>
