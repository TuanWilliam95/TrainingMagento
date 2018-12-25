<?php
namespace AHT\Hello\Controller\Index;

class Add extends Index{
	public function execute(){
		
		return $this->_pageFactory->create();
	}
}