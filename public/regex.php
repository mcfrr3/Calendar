<!DOCTYPE html>
<html>
<head>
	<title>Regular Expression Demo</title>
	<style>
		em{
			background-color: #FF0;
			border-top: 1px solid #000;
			border-bottom: 1px solid #000;
		}
	</style>
</head>
<body>
<?php

/**
 * Set up several test date strings to ensure validation is working
 */
$date[] = '2016-01-14 12:00:00';
$date[] = 'Saturday, May 14th at 7pm';
$date[] = '02-03-10 10:00 pm';
$date[] = '2016-01-14 102:00:00';

/**
 * Date validation pattern
 */
$pattern = "/^(\d{4}(-\d{2}){2} (\d{2})(:\d{2}){2})$/";			// ^ = beginning of string to check/ [^] = everything except inside

foreach ($date as $d){
	echo "<p>", preg_replace($pattern, "<em>$1</em>", $d), "</p>";
}

/**
 * Output the pattern you just used
 */
echo "\n<p>Pattern used: <strong>$pattern</strong></p>";

?>
</body>
</html>