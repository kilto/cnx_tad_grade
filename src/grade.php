<?php
/**
*  
*/
class Grade 
{
	public function tad($score){
		if($score >= 80){
			return "A";	
		}else if($score >= 70){
			return "B";
		}else if($score >= 60){
			return "C";
		}else if($score >= 50){
			return "D";
		}else{
			return "F";
		}
	}
}	
	$score = $_POST["score"];
	$grade = new Grade();		
	echo "Grade " . $grade->tad($score);

?>


	


