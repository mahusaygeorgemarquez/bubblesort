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

$list = array(1,3,5,22,4,80,100,135,150);
$list = bubbleSort($list,0,0);

var_dump($list);
?>
