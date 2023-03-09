
<?php
	$result = 0;
	for ($i = 1; $i <= 15; $i++) {
		$result += sqrt($i);
	}
	echo round($result, 2);
?>