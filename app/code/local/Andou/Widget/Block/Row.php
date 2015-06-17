<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Threeblock
 *
 * @author andou
 */
class Andou_Widget_Block_Row extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface {

  protected $_a;
  protected $_b;
  protected $_c;

  public function __construct() {
    $this->setData('template', 'widgets/row.phtml');
    parent::_construct();
  }

  public function init() {
    $a = $this->getData("brick_a_id");
    $b = $this->getData("brick_b_id");
    $c = $this->getData("brick_c_id");
    $this->_a = Mage::app()->getLayout()->createBlock('cms/block')->setBlockId($a)->toHtml();
    $this->_b = Mage::app()->getLayout()->createBlock('cms/block')->setBlockId($b)->toHtml();
    $this->_c = Mage::app()->getLayout()->createBlock('cms/block')->setBlockId($c)->toHtml();
  }

  public function echoBrickA() {
    echo $this->_a;
  }

  public function echoBrickB() {
    echo $this->_b;
  }

  public function echoBrickC() {
    echo $this->_c;
  }

}
