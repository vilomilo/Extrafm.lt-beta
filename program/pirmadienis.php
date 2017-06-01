<?php 
date_default_timezone_set('Europe/Vilnius');
$date = date('H:i');
switch ($date) {
	case ('13:10' < $date && $date < '14:00'):
		echo 'pirmas variantas';
	break;
}

echo "<br><br>";

if ($date > '13:00' && $date < '14:00')
	echo "paejo antras variantas";
else
	if($date > '14:00' && $date < '14:20')
	echo "14-15";
	else
		if($date > '15:00' && $date < '16:00')
		echo "15-16";
		else
			echo "defaulinis";
		


