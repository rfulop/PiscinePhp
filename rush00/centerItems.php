<div class="centerItems">
  <h2>Popular products</h2>
  <?php
  $items = unserialize(file_get_contents("dbs/items"));
  foreach ($items as $item)
  {
    if ($item['promo'] == '1')
      echo "<div class='elem'>";
      echo "<p><img class='elemImg' src='".$item['img']."'></p>";
      echo "<p class='nameElem'>".$item['name']."</p>";
  }
  ?>
</div>
