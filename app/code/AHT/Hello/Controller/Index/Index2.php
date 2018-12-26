<?php 
namespace AHT\Hello\Controller\Index;

class Index2 extends \Magento\Framework\App\Action\Action{

	public function execute(){
		/*echo "<h1>Hello Module - Index Controller - Index Action</h1>";
		exit();*/
		Echo "<h2>Insert Multil record</h2>";
	for($i=2;$i<=11;$i++){
		$model=$this->_objectManager->create("AHT\Hello\Model\DataExample");
		$model->addData([
			'title' => 'Tieu de $i',
			'content' => 'noi dung $i',
			'status' =>	rand(0,1),
			'sort_order' => $i+1
		])->save();
	}
		exit();
		
	}

}