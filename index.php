<?php
require_once "Database.php";
$db = new Database();
$con = $db->getConnection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forumStyle.css" />
    <link rel="stylesheet" href="homePageStyle.css" />
    <title>Document</title>
</head>

<body>

        <?php
        require "forum.php";

        
        ?>
</body>

</html>
<?php
$db->closeConnection();


