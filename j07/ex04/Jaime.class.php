<?php

class Jaime extends Lannister
{
  public function name($sleep)
  {
    $who = get_class($sleep);
    if ($who == "Tyrion")
      return "Not even if I'm drunk !";
    else if ($who == "Sansa")
      print "Let's do this.";
    else if ($who == "Cersei")
      print "With pleasure, but only in a tower of Winterfell then.";
  }
}
?>
