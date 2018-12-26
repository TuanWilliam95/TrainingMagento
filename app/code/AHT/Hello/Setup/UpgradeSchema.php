<?php
namespace AHT\Hello\Setup;
use Magento\Framework\Setup\SchemaSetupInterface; 
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements \Magento\Framework\Setup\UpgradeSchemaInterface{

	public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context){
		$setup->startSetup();
		$conn=$setup->getConnection();
		$tableName=$setup->getTable('data_new_example');
		if($conn->isTableExists($tableName) != true){
			$table=$conn->newTable($tableName)
					->addColumn(
						'id',
						Table::TYPE_INTEGER,
						null,
						['identity'=>true,'unsigned'=>true,'nullable'=>false,'primary'=>true]
					)
					->addColumn(
						'title',
						Table::TYPE_TEXT,
						255,
						['nullable'=>false,'default'=>'']
					)
					->addColumn(
						'content',
						Table::TYPE_TEXT,
						'2M',
						['nullable'=>false,'default'=>'']
					)
					->setOption('charset','utf8');
			$conn->createTable($table);
		}else{
			$setup->run("ALTER TABLE ".$tableName." ADD COLUMN status BOOLEAN, ADD sort_order SMALLINT");
		}
		$setup->endSetup();
	}
}