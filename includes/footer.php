

</div><!-- end of #postcontainer -->
	<div id="categories">
	<h2>Categories</h2>
		<ul>
	<?php
		$query = "SELECT DISTINCT category FROM article;";
		$results = $database->get($query);
		foreach($results as $result):
		
	?>
	<li class="ref"><a href="filter.php?category=<?php echo $result["category"];  ?>"><?php echo $result["category"]; ?></a></li>
	<?php endforeach; ?>
	</ul>
	</div><!-- end of #categories -->

	<div id="searchbox">
	<h2>Search</h2>
	<form method="post" action="searchResult.php"><input type="text" name="searchBox" placeholder="Enter keyword" /> <p class="search"><input  type="submit" value="Search" name="searchBtn"/></p></form>
	</div> <!-- end of #searchbox -->
</div> <!-- end of #container -->

<div id="footer">
		<p>Developed by &copy; <a href="www.twitter.com/emoosx">Kaung Htet</a></p>
		<p>Student ID : <span class="info">91178</span></p>
		<p>Class : <span class="info">E66A</span></p>
	</div>
	
</body>
</html>