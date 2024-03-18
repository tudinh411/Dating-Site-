<?php include ("top.php"); ?>

<div>
    <h1>Thank you!</h1>
    <p>
        Welcome to NerdLuv,
        <?= $_POST["name"] ?>!<br /><br />
        Now <a href="matches.php">log in to see your matches!</a>
    </p>
</div>

<?php writeToFile(); ?>

<?php include ("bottom.php"); ?>


<?php

function writeToFile()
{


    $userInfo = "";
    foreach ($_POST as $attribute) {
        $userInfo = $userInfo . $attribute . ",";
    }

    file_put_contents("singles.txt", "\n" . substr($userInfo, 0, -1), FILE_APPEND);
}

?>