<?php
	function sum($arr_input)
	{
		if(!empty($arr_input)) {
			$res = 0;
			$arr_size = count($arr_input);
			while($arr_size) {
				$find_char = strpos($arr_input[$arr_size-1], "n");
				if($find_char){
					$arr_sub = explode("n", $arr_input[$arr_size-1]);
					for($i=0; $i<count($arr_sub); $i++) {
						$res += $arr_sub[$i];
					}
				} else {
					$number = $arr_input[$arr_size-1];
					$res += $number;
				}
				$arr_size--;
			}
			echo $res."\n";
		} else {
			echo "0\n";
		}
	}

	$arr_input = array_slice($argv, 2);

	echo sum($arr_input);
?>
