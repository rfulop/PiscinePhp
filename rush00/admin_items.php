<?php
require_once("session.php");

if($_POST['delItem'] && $_POST['delete'] === "OK")
{

  $items = unserialize(file_get_contents("dbs/items"));
  foreach ($items as $item)
  {
    if ($_POST['delItem'] != $item['name'])
      $newitems[] = $item;
  }
  file_put_contents("dbs/items", serialize($newitems));
}

if ($_POST['name'] && $_POST['price'] && $_POST['add'] === "OK")
{
  $items = unserialize(file_get_contents("dbs/items"));
  $new_item['name'] = $_POST['name'];
  $new_item['cat'] = $_POST['cat'];
  $new_item['cat2'] = $_POST['cat2'];
  if (is_numeric($_POST['price']))
    $new_item['price'] = $_POST['price'];
  else
    $new_item['price'] = 1000;
  $new_item['img'] = $_POST['img'];
  $new_item['promo'] = $_POST['promo'];
  $new_item['stock'] = $_POST['stock'];
  $new_item['des'] = $_POST['dest'];
  $items[] = $new_item;
  file_put_contents("dbs/items", serialize($items));
}

if ($_POST['modif'] === "OK")
{
  $items = unserialize(file_get_contents("dbs/items"));
  $i = 0;
  foreach ($items as $item)
  {
      if ($item['name'] === $_POST['modItem'])
      {
        $items[$i]['name'] = $_POST['modItem'];
        if ($_POST['cat'])
          $items[$i]['cat'] = $_POST['cat'];
        if ($_POST['cat2'])
          $items[$i]['cat2'] = $_POST['cat2'];
        if (is_numeric($_POST['price']))
          $items[$i]['price'] = $_POST['price'];
        if ($_POST['img'])
          $items[$i]['img'] = $_POST['img'];
        if ($_POST['promo'])
          $items[$i]['promo'] = $_POST['promo'];
        if ($_POST['stock'])
          $items[$i]['stock'] = $_POST['stock'];
        if ($_POST['des'])
          $items[$i]['des'] = $_POST['des'];
      }
    $i++;
    }
    file_put_contents("dbs/items", serialize($items));
}
 ?>


<?php
include 'header.php';
include 'navTop.php';
 ?>

<h1>Admin items</h1>
<h2>Delete items</h2>

    <form method="post" action="admin_items.php">
      <label for="delItem">Delete items</label><br />
        <select name="delItem">
  <?php
    $items = unserialize(file_get_contents("dbs/items"));
    foreach ($items as $item)
    {
         echo "<option value='".$item['name']."'>".$item['name']."</option>";
    }
    ?>
          <input type="submit" name="delete" value="OK" />
        </select>
      </form>

  <h2>Add item</h2>
      <form method="post" action="admin_items.php">
        <label for="addItem">Add item</label><br />
			     <label for="test">Name: </label>
            <input type="text" name="name" /><br />
			     <label for="test">Cat1: </label>
            <input type="text" name="cat" /><br />
			     <label for="test">Cat2: </label>
            <input type="text" name="cat2" /><br />
			     <label for="test">Price: </label>
            <input type="text" name="price" /><br />
			     <label for="test">Img: </label>
            <input type="text" name="img" /><br />
			     <label for="test">Promo: </label>
            <input type="text" name="promo" /><br />
			     <label for="test">Stock: </label>
            <input type="text" name="stock" /><br />
			     <label for="test">Description: </label>
            <input type="text" name="des" /><br />
            <input type="submit" name="add" value="OK" />
      </form>

      <h2>Modify item</h2>

          <form method="post" action="admin_items.php">
            <label for="modItem">Modify item</label><br />
              <select name="modItem">
        <?php
          $items = unserialize(file_get_contents("dbs/items"));
          foreach ($items as $item)
          {
               echo "<option value='".$item['name']."'>".$item['name']."</option>";
          }
          ?>
            </select><br />
      			     <label for="test">Cat1: </label>
                  <input type="text" name="cat" /><br />
      			     <label for="test">Cat2: </label>
                  <input type="text" name="cat2" /><br />
      			     <label for="test">Price: </label>
                  <input type="text" name="price" /><br />
      			     <label for="test">Img: </label>
                  <input type="text" name="img" /><br />
      			     <label for="test">Promo: </label>
                  <input type="text" name="promo" /><br />
      			     <label for="test">Stock: </label>
                  <input type="text" name="stock" /><br />
      			     <label for="test">Description: </label>
                  <input type="text" name="des" /><br />
                  <input type="submit" name="modif" value="OK" />
            </form>
