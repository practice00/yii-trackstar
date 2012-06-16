<?php
class IssueTest extends CDbTestCase {
	public function testGetTypes(){
		$options = Issue::model()->typeOptions;
		$this->assertTrue(is_array($options));
		
		$this->assertTrue(3==count($options));
		$this->assertTrue(in_array('Bug',$options));
		$this->assertTrue(in_array('Feature',$options));
		$this->assertTrue(in_array('Task',$options));
	}
	
	public function testGetStatus() {
		$options = Issue::model()->statusOptions;
		$this->assertTrue(is_array($options));
		
		$this->assertTrue(3==count($options));
		$this->assertTrue(in_array('Not Yet Started',$options));
		$this->assertTrue(in_array('Started',$options));
		$this->assertTrue(in_array('Finished',$options));
	}
}
?>
