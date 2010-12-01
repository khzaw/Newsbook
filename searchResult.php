<?php

require("redbean/rb127.php");
include("config/db.php");
include("includes/header.php");
include("includes/functions.php");
$toolbox = RedBean_Setup::kickstartdev("mysql:host=localhost;dbname=assignment1", $user, $password);
$redbean = $toolbox->getRedBean();

?>

<?php

$keyword = trim($_POST["searchBox"]);
	
if(isset($_POST["searchBox"])):
	$database = $toolbox->getDatabaseAdapter();
	$keyword = $database->escape($keyword);
		
	$query = "SELECT headline, category, writer, source, story, date_submitted FROM article WHERE (headline LIKE '%".$keyword."%') OR (story LIKE '%".$keyword."%');";
		
	$results = $database->get($query);
	foreach($results as $result):
		
?>
		<div class="post">
	<div class="entryDate">
		<span class="postMonth"><?php echo getMonth($result["date_submitted"]); ?></span>
		<span class="postDay"><?php echo getDay($result["date_submitted"]); ?></span> 
		<span class="postYear"><?php echo getYear($result["date_submitted"]); ?></span> 
	</div><!-- end of .entryDate -->
	
	<h3 class="headline"><a href="detail.php?id=<?php echo $result["id"]; ?>"><?php echo $result["headline"];?></a></h3>
	<p><span class="writerNsource"><span class="writer"><?php echo $result["writer"]; ?></span>&nbsp;&nbsp;&nbsp;<span class="source"><?php echo "Source : ".$result["source"]; ?></p>
	
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.newsbook.com/home.php" data-text="<?php echo $result["headline"]; ?>" data-count="horizontal" data-via="emoosx">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	
	<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fexample.com%2Fpage%2Fto%2Flike&amp;layout=standard&amp;show_faces=true&amp;width=400&amp;action=like&amp;font=verdana&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:20px; margin=0px; padding:0px" allowTransparency="true"></iframe>
	

		
	<p class="story"><?php echo $result["story"]; ?></p>
	<p class="category"><span class="tag">Tags : :&nbsp;&nbsp;&nbsp;</span><?php echo $result["category"]; ?></p>
	
		
	</div><!-- end of .post -->


<?php endforeach; ?>

<? endif; ?>
<?php include("includes/footer.php"); ?>