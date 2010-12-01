<?php

require("redbean/rb127.php");
include("config/db.php");
include("includes/functions.php");
include("includes/header.php");

$toolbox = RedBean_Setup::kickstartdev("mysql:host=localhost;dbname=assignment1", $user, $password);
$redbean = $toolbox->getRedBean();
$database = $toolbox->getDatabaseAdapter();

$deleteID = $_GET["deleteID"];

$database->exec("DELETE FROM article WHERE id=".$deleteID);
echo 'Successfully deleted! Back to <a href="home.php">Home</a>';
?>
<?php ("includes/footer.php"); ?>