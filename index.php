<?php
$seed = time();
$num = rand(1,10);
$picpath = "/star-sky-img/".$num.".jpg";
die(header("Location: $picpath"));
?>
