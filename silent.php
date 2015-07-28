
<?php

$securetoken = $_GET['SECURETOKEN'];
$securetokenid = $_GET['SECURETOKENID'];
$amt = $_GET['AMT'];
$user1 = $_GET['USER1'];
$type = $_GET['TYPE'];

$result = array($securetoken,$securetokenid,$amt,$user1,$type);
print_r($_GET);

//$file = '/PaymentGateway/result.txt';

$fh=fopen('result.txt','a');

foreach ($_GET as $value){
fwrite($fh,$value." ");
}
foreach ($_POST as $value){
fwrite($fh,$value." ");
}
fclose($fh);

