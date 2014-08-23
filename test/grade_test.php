<?php
#include "src/grade.php";

class GradeUnitTest extends PHPUnit_Framework_TestCase{
	function test_socre_80_get_A(){
		$grade = new Grade();
		$this->assertEquals("A",$grade->tad(80));
	}

	function test_socre_70_get_B(){
		$grade = new Grade();
		$this->assertEquals("B",$grade->tad(75));
	}
	function test_socre_60_get_C(){
		$grade = new Grade();
		$this->assertEquals("C",$grade->tad(60));
	}
	function test_socre_50_get_D(){
		$grade = new Grade();
		$this->assertEquals("D",$grade->tad(52));
	}
	function test_socre_0_get_F(){
		$grade = new Grade();
		$this->assertEquals("F",$grade->tad(49));
	}
	 

}


?>
