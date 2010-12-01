<?php 

require("redbean/rb127.php");
include("config/db.php");
$toolbox = RedBean_Setup::kickstartdev("mysql:host=localhost;dbname=demo", $user, $password);
$redbean = $toolbox->getRedBean();
?>
<h1>My Game Collection</h1>
<?php

if(isset($_POST["submit"])) {
	$game = $redbean->dispense('game');
	$game->import($_POST, "title,rating");
	$redbean->store($game);
}

$games = R::find("game");
foreach($games as $game) {
	echo "<br>	-	".$game->title." : rating ".$game->rating;
}

?>

<h2>Add A Game</h2>
<form action="" method="post">
	<label for="title">Game Title</label>
	<input type="text" name="title" value="" />
	<br>
	<label for="rating">Rating</label>
	<input type="text" name="rating" value="" />
	<input type="submit" name="submit" value="add" />
</form>