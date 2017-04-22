<?php
	function sum($arr_input)
	{
		if(!empty($arr_input)) {
			$res = 0;
			$arr_size = count($arr_input);
			while($arr_size) {
				$res += $arr_input[$arr_size-1];
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
