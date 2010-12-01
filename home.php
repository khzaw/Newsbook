<?php

require("redbean/rb127.php");
include("config/db.php");
include("includes/functions.php");

$toolbox = RedBean_Setup::kickstartdev("mysql:host=localhost;dbname=assignment1", $user, $password);
$redbean = $toolbox->getRedBean();
$database = $toolbox->getDatabaseAdapter();

?>
<?php include("includes/header.php"); ?>

<h2>Recent News</h2>

<?php

if(isset($_POST["updateBtn"])) {
	$updateid = $_POST["updateID"];
	$updateheadline = $_POST["updateheadline"];
	$updatecategory = $_POST["updatecategory"];
	$updatewriter = $_POST["updatewriter"];
	$updatesource = $_POST["updatesource"];
	$updatestory = $_POST["updatestory"];
	$query = "UPDATE article SET headline='".$updateheadline."',writer='".$updatewriter."',source='".$updatesource."',story='".$updatestory."' WHERE id=".$updateid;
	$database->exec($query);
	echo'<h2>Article Updated!</h2>';
}

if(isset($_POST["submitBtn"])) {
	$article = $redbean->dispense("article");
	$_POST["story"] = mysql_escape_string($_POST["story"]);
	$columns = "headline,category,writer,source,story";
	$article->import($_POST, $columns);
	$article->date_submitted = date("F j, Y, g:i a");  
	$redbean->store($article);
}

$articles = R::find("article", "1 ORDER BY date_submitted DESC limit 10");
foreach($articles as $article) :  
?>
	<div class="post">
	<div class="entryDate">
		<span class="postMonth"><?php echo getMonth($article->date_submitted); ?></span>
		<span class="postDay"><?php echo getDay($article->date_submitted); ?></span> 
		<span class="postYear"><?php echo getYear($article->date_submitted); ?></span> 
	</div><!-- end of .entryDate -->
	
	<h3 class="headline"><a href="detail.php?id=<?php echo $article->id; ?>"><?php echo $article->headline;?></a></h3>
	<p><span class="writerNsource"><span class="writer"><?php echo $article->writer; ?></span>&nbsp;&nbsp;&nbsp;<span class="source"><?php echo "Source : ".$article->source; ?></p>
	
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.newsbook.com/home.php" data-text="<?php echo $article->headline; ?>" data-count="horizontal" data-via="emoosx">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	
	<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fexample.com%2Fpage%2Fto%2Flike&amp;layout=standard&amp;show_faces=true&amp;width=400&amp;action=like&amp;font=verdana&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:20px; margin=0px; padding:0px" allowTransparency="true"></iframe>
	

		
	<p class="story"><?php echo $article->story; ?></p>
	<p class="category"><span class="tag">Tags : :&nbsp;&nbsp;&nbsp;</span><?php echo $article->category; ?></p>
	
		
	</div><!-- end of .post -->


<?php endforeach; ?>
<?php include("includes/footer.php"); ?>