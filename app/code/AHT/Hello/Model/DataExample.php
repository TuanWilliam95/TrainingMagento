<?php 
namespace AHT\Hello\Model;
class DataExample extends \Magento\Framework\Model\AbstractModel{
	public function _construct(){
		$this->_init("AHT\Hello\Model\ResourceModel\DataExample");
	}
}