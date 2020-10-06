<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>API Example for Website</title>
</head>
<body>


<?php
$url = 'http://be.diamc.kr:3500/api/servers/diamc.kr:19132'; 

$rank = $url['rank'];


echo ($rank);
?>

<p>Website Example<br>
Your Server's Rank is <?php ("$rank") ?></p>
</body>