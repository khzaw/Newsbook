<?php 

require("redbean/rb127.php");
include("includes/header.php"); 

include("config/db.php");

$toolbox = RedBean_Setup::kickstartdev("mysql:host=localhost;dbname=assignment1", $user, $password);
$redbean = $toolbox->getRedBean();
$database = $toolbox->getDatabaseAdapter();
?>

<img src="images/sitemap.png" />
<?php
include("includes/footer.php");
?>

