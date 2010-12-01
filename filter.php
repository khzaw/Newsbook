<?php require("redbean/rb127.php"); ?>
<?php include("config/db.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

<?php
	
	$toolbox = RedBean_Setup::kickstartdev("mysql:host=localhost;dbname=assignment1", $user, $password);
	$redbean = $toolbox->getRedBean();
	$database = $toolbox->getDatabaseAdapter();
	
	$category = $_GET["category"];
	$articles = R::find("article");
	foreach($articles as $article):
		if($article->category == $category):
?>
<div class="post">
	<div class="entryDate">
		<span class="postMonth"><?php echo getMonth($article->date_submitted); ?></span>
		<span class="postDay"><?php echo getDay($article->date_submitted); ?></span> 
		<span class="postYear"><?php echo getYear($article->date_submitted); ?></span> 
	</div>
	<h3 class="headline"><a href="detail.php?id=<?php echo $article->id; ?>"><?php echo $article->headline;?></a></h3>
	<p><span class="writerNsource"><span class="writer"><?php echo $article->writer; ?></span>&nbsp;&nbsp;&nbsp;<span class="source"><?php echo "Source : ".$article->source; ?></p>
	
	<a href="http://twitter.com/share" class="twitter-share-button"   data-url="http://www.newsbook.com/home.php" data-text="<?php echo $article->headline; ?>" data-count="horizontal" data-via="emoosx">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	
	<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fexample.com%2Fpage%2Fto%2Flike&amp;layout=standard&amp;show_faces=true&amp;width=400&amp;action=like&amp;font=verdana&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:20px; margin=0px; padding:0px" allowTransparency="true"></iframe>
	

		
	<p class="story"><?php echo $article->story; ?></p>
	<p class="category"><span class="tag">Tags : :&nbsp;&nbsp;&nbsp;</span><?php echo $article->category; ?></p>
	
	</div>

<?php break; ?>
<?php endif; ?>
<?php endforeach; ?>

</div><!-- end of .post -->
<?php include("includes/footer.php"); ?>
