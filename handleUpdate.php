<?php

require("redbean/rb127.php");
include("config/db.php");
include("includes/functions.php");
include("includes/header.php");

$toolbox = RedBean_Setup::kickstartdev("mysql:host=localhost;dbname=assignment1", $user, $password);
$redbean = $toolbox->getRedBean();
$database = $toolbox->getDatabaseAdapter();

$updateID = $_GET["updateID"];

$article = R::findOne("article", "id=".$updateID);	
?>

<form action="home.php" method="post">
	<p><input type="hidden" name="updateID" value="<?php echo $article->id; ?>" /></p>
	<p><label for="headline">Headline</label><input type="text" name="updateheadline" value="<?php echo $article->headline; ?>" id="headline" placeholder="Title of the story" /></p>
	<p>
	<label for="category">Category:</label>
	<select name="updatecategory" class="dropdown">
		<option value="Singapore">Singapore</option>
		<option value="Tech">Tech</option>
		<option value="World">World</option>
		<option value="Entertainment">Entertainment</option>
		<option value="Business">Business</option>
		<option value="World">World</option>
		<option value="Travel">Travel</option>
	</select>
	</p>
	<p><label for="writer">Writer</label><input type="text" id="writer" value="<?php echo $article->writer;?>" placeholder="e.g., J. K. Rowling" name="updatewriter" /></p>
	<p><label for="source">Source</label><input type="text" id="source" value="<?php echo $article->source; ?>" name="updatesource" placeholder="e.g., Strait Times News" /></p>
	<p><label for="story">Story:</label><textarea name="updatestory" id="story" ><?php echo $article->story; ?></textarea></p>
	<p class="submit"><input  type="submit" value="Update Article" id="submitBtn" name="updateBtn" /></p>
</form>

<?php include("includes/footer.php"); ?>
