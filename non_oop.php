<?php
for ($i=1; $i <= 100; $i++) {
	//echo "$i ";
	switch (1) {
		case (!($i%3) && !($i%5)):
			echo 'Linianos<br/>';
			break;
		case !($i%5):
			echo 'IT<br/>';
			break;
		case !($i%3):
			echo 'Linio<br/>';
			break;
		default:
			echo "$i<br/>";
			break;
	}
}
?>