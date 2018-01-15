<?php
require_once("session.php");
 ?>
<?php
include 'header.php';
include 'navtop.php';
 ?>

<a href="admin_accounts.php"><h2 class="centerH">Administrate accounts</h2></a>
<a href="admin_categories.php"><h2 class="centerH">Administrate categories</h2></a>
<a href="admin_items.php"><h2 class="centerH">Administrate items</h2></a>

<br />
<br />
<h2 class="centerH">Orders :</h2>
<?php
if (file_exists("dbs/orders"))
{
  $orders = unserialize(file_get_contents("dbs/orders"));

  foreach ($orders as $order)
  {
    echo "<div class='ord'>";
    echo "<p class='ordersN'>".$order['login']."<p>";
    $cart = $order['order'];
    $total = 0;

    foreach ($cart as $item)
    {
      echo "<li class='liN'>".$item['name']. " Price :".$item['price'] ."</li>";
      $total += $item['price'];
    }
      echo "<p class='liN'>Total: ".$total."</p>";
  }
  echo "</div>";
  echo "</div>";
}
else {
  echo "<p class='centerH'>No orders</p>";
}
 ?>
