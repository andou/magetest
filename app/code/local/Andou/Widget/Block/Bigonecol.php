<?php

class Andou_Widget_Block_Bigonecol extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface {

  public function __construct() {
    $this->setData('template', 'widgets/bigonecol.phtml');
    parent::_construct();
  }

  public function getImageUrl($parameter) {
    return sprintf("%s%s", Mage::getBaseUrl('media'), $this->getData($parameter));
  }

}