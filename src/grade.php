<?php
/**
*  
*/
class Grade {

public function tad($score){
		$result = "F";
		if($score >= 80){
			$result="A";	
		}else if($score >= 70){
			$result="B";
		}else if($score >= 60){
			$result="C";
		}else if($score >= 50){
			$result="D";
		}else{
			$result="F";
		}
		return $result;
	}
}

$score = $_POST["score"];
$grade = new Grade();		
echo "<div id="gradeID">Grades " . $grade->tad($score) ."</div>";

?>


	


