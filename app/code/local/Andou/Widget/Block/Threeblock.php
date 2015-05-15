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
class Andou_Widget_Block_Threeblock extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface {

  protected $_big;
  protected $_small_1;
  protected $_small_2;

  public function __construct() {
    $this->setData('template', 'widgets/threeblock.phtml');
    parent::_construct();
  }

  public function init() {
    $big = $this->getData("block_id_big");
    $small1 = $this->getData("block_id_small_1");
    $small2 = $this->getData("block_id_small_2");
    $this->_big = Mage::app()->getLayout()->createBlock('cms/block')->setBlockId($big)->toHtml();
    $this->_small_1 = Mage::app()->getLayout()->createBlock('cms/block')->setBlockId($small1)->toHtml();
    $this->_small_2 = Mage::app()->getLayout()->createBlock('cms/block')->setBlockId($small2)->toHtml();
  }

  public function echoBigBlock() {
    echo $this->_big;
  }

  public function echoSmallBlockOne() {
    echo $this->_small_1;
  }

  public function echoSmallBlockTwo() {
    echo $this->_small_2;
  }

}
