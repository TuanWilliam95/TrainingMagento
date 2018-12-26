<?php 
namespace AHT\Hello\Controller\Index;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Index extends \Magento\Framework\App\Action\Action{
	protected $_request;
	protected $_pageFactory;
	public function __construct(Context $context, RequestInterface $request, PageFactory $pageFactory){
		$this->_request=$request;
		$this->_pageFactory=$pageFactory;
		parent::__construct($context);
	}
	public function execute(){
		/*echo "<h1>Hello Module - Index Controller - Index Action</h1>";
		exit();*/
		$model=$this->_objectManager->create("AHT\Hello\Model\DataExample");
		$model->addData([
			'title' => 'Tieu de 01',
			'content' => 'noi dung 01',
			'status' =>	true,
			'sort_order' => 1
		])->save();
		exit();
		return $this->_pageFactory->create();
	}
	public function getInfo(){
		$requestName=$this->_request->getFullActionName();
		$result=explode("_",$requestName);
		return $result;
	}
}