<?php
$dt = new DateTime('2016-12-12 01:56:29');
$dt->modify("-1 hour");
$dt = $dt->format('Y-m-d H:i:s');
echo $dt;
?>