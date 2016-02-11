<?php
/* Hammadi Abderrahmane
	CREATE TABLE IF NOT EXISTS `visitor` (
  		`id` int(11) NOT NULL,
  		`ip` varchar(20) NOT NULL
		)
	ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf-8;
*/
include'config.php'; // Config File 
$ip = $_SERVER['REMOTE_ADDR'];
$check="SELECT ip FROM visitor WHERE ip='$ip'";
$check2=$DBH->prepare($check);
$check2->execute();
$check3=$check2->rowCount();
if ($check3=='0') {
	$query = "INSERT INTO `visitor` (`id`, `ip`) VALUES ('', '$ip');";
	$query2=$DBH->prepare($query);
	$query2->execute();
}
$num =$DBH->prepare("SELECT ip FROM visitor");
$num->execute();
$vis=$num->rowCount();
?>
