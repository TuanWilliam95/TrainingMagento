<?php 
namespace AHT\Schema\Model\ResourceModel\DataExample;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
	public function _construct(){
		$this->_init("AHT\Hello\Model\DataExample","AHT\Hello\Model\ResourceModel\DataExample");
	}
}