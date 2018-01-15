<?php
require_once("session.php");

if($_POST['addCat'] && $_POST['add'] === "OK")
{
  $cats = unserialize(file_get_contents("dbs/comodities"));
  $newcats['name'] = $_POST['addCat'];
  $cats[] = $newcats;
  file_put_contents("dbs/comodities", serialize($cats));
}



if($_POST['delCat'] && $_POST['delete'] === "OK")
{
  $cats = unserialize(file_get_contents("dbs/comodities"));

  foreach ($cats as $cat)
  {
    if ($_POST['delCat'] != $cat['name'])
      $newcats[] = $cat;
  }
  file_put_contents("dbs/comodities", serialize($newcats));
}
 ?>

<?php
include 'header.php';
include 'navTop.php';
 ?>

<h1>Admin categories</h1>
<h2>Delete category</h2>
  <form method="post" action="admin_categories.php">
    <label for="delCat">Delete category</label><br />
      <select name="delCat">
<?php
  $cats = unserialize(file_get_contents("dbs/comodities"));
  foreach ($cats as $cat)
  {
      echo "<option value='".$cat['name']."'>".$cat['name']."</option>";
  }
  ?>
        <input type="submit" name="delete" value="OK" />
      </select>
    </form>

    <h2>Add category</h2>
      <form method="post" action="admin_categories.php">
        <label for="addCat">Add category</label><br />
            <input type="text" name="addCat" />
            <input type="submit" name="add" value="OK" />
      </form>
