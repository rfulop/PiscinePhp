<?php
require_once("session.php"); ?>
<html>
  <?php

  include 'header.php';
  include 'navtop.php';
  include 'homepage.php';
  include 'navSide.php';
  include 'proSide.php';

  if ($_GET['add'])
  {
    $items = unserialize(file_get_contents("dbs/items"));
    foreach ($items as $item)
    {
      if ($_GET['add'] === $item['name'])
      {
         $_SESSION['shop'][] = $item;
      }
    }
  }

  if ($_GET['cat'])
  {
    echo '<div class="centerItems">';
    $cat = $_GET['cat'];
    $items = unserialize(file_get_contents("dbs/items"));
    foreach ($items as $item)
    {
      if ($item['cat'] === $cat)
      {
        echo "<div class='elem'>";
        echo "<img class='imgD' src='".$item['img']."'>";
        echo "<p>".$item['name']."    - Price = ".$item['price'];
        echo "<a href='display.php?cat=".$cat."&add=".$item['name']."'><button type='button'>Add to shop</button></a>";
        echo "</p>";
        echo "</div>";
      }
    }
    echo "</div>";
  }

  if ($_GET['promo'])
  {
    echo '<div class="centerItems">';
    $cat = $_GET['promo'];
    $items = unserialize(file_get_contents("dbs/items"));
    foreach ($items as $item)
    {
      if ($item['promo'] === $cat)
      {
        echo "<div class='elem'>";
        echo "<img class='imgD' src='".$item['img']."'>";
        echo "<p>".$item['name']."    - Price = ".$item['price'];
        echo "<a href='display.php?cat=".$cat."&add=".$item['name']."'><button type='button'>Add to shop</button></a>";
        echo "</p>";
        echo "</div>";
      }
    }
    echo "</div>";
  }

  ?>
</html>
