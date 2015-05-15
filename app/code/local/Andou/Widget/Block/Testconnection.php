<?php

class Andou_Widget_Block_Testconnection extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface {

  public function __construct() {
    $this->setData('template', 'widgets/testconnection.phtml');
    parent::_construct();
  }
}