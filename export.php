<?php
require 'config/connectionInject.php';


$stmt=$connect->prepare('select * from dailyproductadd');
$stmt->execute();


$columnHeader ='';



$setData='';

while($rec =$stmt->FETCH(PDO::FETCH_ASSOC))
{
 $rowData = '';
 foreach($rec as $value)
 {
  $value = '"' . $value . '"' . "\t";
  $rowData .= $value;
 }
 $setData .= trim($rowData)."\n";
}


header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Book record 
sheet.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($columnHeader)."\n".$setData."\n";

?>