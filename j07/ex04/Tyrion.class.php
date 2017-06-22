<?php

class Tyrion extends Lannister
{
  public function name($sleep)
  {
    $who = get_class($sleep);
    if ($who == "Jaime" || $who == "Cersei")
      return "Not even if I'm drunk !";
    else if ($who == "Sansa")
      return "Let's do this.";
  }
}
?>
