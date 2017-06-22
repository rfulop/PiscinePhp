<?php

class NightsWatch implements IFighter
{
    private $_fighters = array();
    public function recruit($char)
    {
      if (method_exists($char, "fight"))
        array_push($this->_fighters, $char);
    }
    public function fight()
    {
      foreach ($this->_fighters as $key => $value) {
        $value->fight();
      }
    }
}

?>
