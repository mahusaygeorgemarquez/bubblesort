<?php 
function bubbleSort($list = array()){
	for($i=0; $i<count($list)-1; $i++){
		for($j=$i; $j<count($list); $j++){
			if($list[$i] > $list[$j]){
				$tmp = $list[$i];
				$list[$i] = $list[$j];
				$list[$j] = $tmp;
			}
		}
	}
	
	return $list;
}
?>