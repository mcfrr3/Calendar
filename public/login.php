<?php
/**
 * Created by IntelliJ IDEA.
 * User: Michael
 * Date: 19.07.2016
 * Time: 08:39
 */

declare(strict_types=1);

/**
 * Include necessary files
 */
include_once '../sys/core/init.inc.php';

/**
 * Output the header
 */
$page_title = "Please Log In";
$css_files = array("style.css", "admin.css");
include_once 'assets/common/header.inc.php';

?>

<div id="content">

	<form action="assets/inc/process.inc.php" method="post">
		<fieldset>
			<legend>Please Log In</legend>
			<label>
				Username
				<input type="text" name="uname" id="uname" value="">
			</label>
			<label>
				Password
				<input type="password" name="pword" id="pword" value="">
			</label>
			<input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
			<input type="hidden" name="action" value="user_login">
			<input type="submit" name="login_submit" value="Log In">
			or <a href="./">cancel</a>
		</fieldset>
	</form>

</div><!-- end #content -->

<?php

/**
 * Output the footer
 */
include_once 'assets/common/footer.inc.php';

?>
