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
 * Store the sample set of text to use for the examples of regex
 */
//language="HTML"
$string = <<<TEST_DATA

<h2>Regular Expression Testing</h2>
<p>
	In this document, there is a lot of text that can be matched
	using regex. The benefit of using a regular expression is much
	more flexible, albeit complex, syntax for text
	pattern matching.
</p>
<p>
	After you get the hang of regular expressions, also called 
	regexes, they will become a powerful tool for pattern matching.
</p>
<hr>
TEST_DATA;

/************** Using str_replace ***************/
/**
 * Use str_replace() to highlight any occurrence of the word
 * "regular"
 */
//$check1 = str_replace("regular", "<em>regular</em>", $string);

/**
 * Use str_replace() again to highlight any capitalized occurrence
 * of the word "Regular"
 */
//echo str_replace("Regular", "<em>Regular</em>", $check1);
/************** End using str_replace ***************/

/**
 * Use regex to highlight any occurence of the letters a-c
 */
//$pattern = "/([a-c])/i"; 				// i = case-insensitive, g = global (more than one occurance)
//$pattern = "/(\b\w{4}\b)/";			// \b = word border, \w = word, {lowerLimit, upperLimit}
//$pattern = "/\b(\w{3}|\w{6,7})\b/";	// | = OR
//$pattern = "/(expressions?)/";		// last item is optional (in this case the s)
//$pattern = "/(regex)/i";				// matches the word "regex"
//$pattern = "/(regex(es)?)/i";			// matches the word "regex" and "regexes"
//$pattern = "/(reg(ular\s)?ex(es)?)/i";
$pattern = "/(reg(ular\s)?ex(pressions?|es)?)/i";
echo preg_replace($pattern, "<em>$1</em>", $string);

/**
 * Output the pattern you just used
 */
echo "\n<p>Pattern used: <strong>$pattern</strong></p>";

?>
</body>
</html>