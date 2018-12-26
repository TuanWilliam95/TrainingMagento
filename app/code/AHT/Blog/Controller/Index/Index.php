<?php
namespace AHT\Blog\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	
	protected $_postFactory;
	public function __construct(
		\AHT\Blog\Model\PostFactory $postFactory,
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		$this->_postFactory = $postFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$model=$this->_objectManager->create("AHT\Blog\Model\Post");
	
		echo "<h2>Find Record</h2>";
		$collection = $model->getCollection()->getData();

		
			echo "<pre>";
			print_r($collection);
			echo "</pre>";
		

		exit();

		return $this->_pageFactory->create();
	}
}
