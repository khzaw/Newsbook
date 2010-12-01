<?php
	require("redbean/rb127.php");
	include("config/db.php");
	include("includes/header.php");
	include("includes/functions.php");
	
	$toolbox = RedBean_Setup::kickstartdev("mysql:host=localhost;dbname=assignment1", $user, $password);
	$redbean = $toolbox->getRedBean();
	$database = $toolbox->getDatabaseAdapter();
?>

<h2>Share A piece of News</h2>
<form action="home.php" method="post">
	<p><label for="headline">Headline</label><input type="text" name="headline" id="headline" placeholder="Title of the story" /></p>
	<p>
	<label for="category">Category:</label>
	<select name="category" class="dropdown">
		<option value="Singapore">Singapore</option>
		<option value="Tech">Tech</option>
		<option value="World">World</option>
		<option value="Entertainment">Entertainment</option>
		<option value="Business">Business</option>
		<option value="World">World</option>
		<option value="Travel">Travel</option>
	</select>
	</p>
	<p><label for="writer">Writer</label><input type="text" id="writer" placeholder="e.g., J. K. Rowling" name="writer" /></p>
	<p><label for="source">Source</label><input type="text" id="source" name="source" placeholder="e.g., Strait Times News" /></p>
	<p><label for="story">Story:</label><textarea name="story" id="story" value=""></textarea></p>
	<p class="submit"><input  type="submit" value="Share" id="submitBtn" name="submitBtn" /></p>
</form>

<?php include("includes/footer.php"); ?>


