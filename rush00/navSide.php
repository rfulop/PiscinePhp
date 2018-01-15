<div id="navSide">
<nav>
  <h2>Categories</h2>
  <ul>
    <?php
    $comodities = unserialize(file_get_contents("dbs/comodities"));
    foreach ($comodities as $comodity)
    {
      echo '<li><a href="display.php?cat=' . $comodity['name'] . '">' .$comodity['name'] . '</a></li>';
    }
    ?>
  </ul>
</nav>
</div>
