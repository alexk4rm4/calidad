<?php

# Seguridad
defined('INDEX_DIR') OR exit('Ocrend software says .i.');

//------------------------------------------------

class homeController extends Controllers {
	public $colors;
	public $obj;

  public function __construct() {
    parent::__construct();
    $colors = new Colors;
    echo $this->template->render('home/home',array('colores' => $colors->all()));
  }

}

?>
