<?php
foreach ($_REQUEST as $key => $value) {
	if (preg_match_all('/^inp([0-2])([0-2])$/', $key, $matches)) {
		$row = $matches[1][0];
		$col = $matches[2][0];

		$table[$row][$col] = $value;
	}
}