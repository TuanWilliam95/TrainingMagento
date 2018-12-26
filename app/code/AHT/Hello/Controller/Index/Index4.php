<?php 
namespace AHT\Hello\Controller\Index;

class Index4 extends \Magento\Framework\App\Action\Action{

	public function execute(){
		/*echo "<h1>Hello Module - Index Controller - Index Action</h1>";
		exit();*/
		Echo "<h2>Delete record</h2>";
	for($i=2;$i<=11;$i++){
		$model=$this->_objectManager->create("AHT\Hello\Model\DataExample");
		$data=$model->load(1);
		$data->delete();
		exit();
		
	}

}