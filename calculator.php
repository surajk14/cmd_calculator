<?php
	function sum($var1, $var2)
	{
		if($var1 == null || $var2 == null) {
			$var1 = (($var1 == null) ? 0 : $var1);
			$var2 = (($var2 == null) ? 0 : $var2);
		}

		$res = $var1 + $var2;
		echo $res."\n";
	}

	$var1 = (isset($argv[2]) ? $argv[2] : null);
	$var2 = (isset($argv[3]) ? $argv[3] : null);

	echo sum($var1, $var2);
?>
