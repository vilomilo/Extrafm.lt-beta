<?php 
date_default_timezone_set('Europe/Vilnius');
$date = date('l');
switch ($date) {
  case 'Sunday':
    include 'sekmadienis.php';
    break;
  case 'Monday':
    include 'pirmadienis.php';
    break;
  case 'Tuesday':
    include 'antradienis.php';
    break;
  case 'Wednesday':
    include 'treciadienis.php';
    break;
  case 'Thursday':
    include 'ketvirtadienis.php';
    break;
  case 'Friday':
    include 'penktadienis.php';
    break;
  case 'Saturday':
    include 'sestadienis.php';
    break;
}