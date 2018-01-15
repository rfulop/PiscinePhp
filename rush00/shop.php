<?php
  require_once("session.php");

  include 'header.php';
  include 'navtop.php';
  include 'navSide.php';


if ($_GET['valid'] === "OK")
{
  if (file_exists("dbs/orders"))
    $orders = unserialize(file_get_contents("dbs/orders"));
  $new_order = ['login' => $_SESSION['login'], 'order' => $_SESSION['shop']];
  $orders[] = $new_order;

  file_put_contents("dbs/orders", serialize($orders));

}

if ($_SESSION['shop'])
{
  $total;
  echo '<div class="centerItems">';
  foreach ($_SESSION['shop'] as $item)
  {
    echo "<div class='elem'>";
    echo "<img class='imgD' src='".$item['img']."'>";
    echo "<p>".$item['name']. " Price :".$item['price'] ."</p>";
    $total += $item['price'];
    echo "</div>";
  }
  echo "<p>Total: ".$total."</p>";
  if ($_SESSION['login'])
    echo "<a href='shop.php?valid=OK'><button type='button'>Validate</button></a>";
  else {
    echo "<a href='login.php'><button type='button'>Log for buy</button></a>";
  }
echo "</div>";
}
else {
  echo "<p class='centerP'>Your shop is empty</p>";
}


?>
