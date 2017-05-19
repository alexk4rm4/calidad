<?php

# Seguridad
defined('INDEX_DIR') OR exit('Ocrend software says .i.');

//------------------------------------------------

final class Colors extends Models implements OCREND {

  public function __construct() {
    parent::__construct();
  }

  public function all(){
  	return $this->db->select("*","colors");
  }

  public function __destruct() {
    parent::__destruct();
  }

}

?>
