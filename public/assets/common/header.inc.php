<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<?php foreach ($css_files as $css): ?>
		<link rel="stylesheet" type="text/css" media="screen,projection"
			  href="assets/css/<?php echo $css; ?>">
	<?php endforeach; ?>
</head>
<body>

