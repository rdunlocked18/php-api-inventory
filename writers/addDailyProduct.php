<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'config/connectionInject.php';
	addSingleProduct();
}

function addSingleProduct(){
    global $connect;
    
    echo "hello";
    $_id = $_POST['_id'];
    $vendorName = $_POST['vendorName'];
    $tpNumber = $_POST['tpNumber'];
    $billNumber = $_POST['billNumber'];
    $recievedDate = $_POST['recievedDate'];
    $invoiceDate = $_POST['invoiceDate'];
    $tpDate = $_POST['tpDate'];
    $itemName = $_POST['itemName'];
    $batchNumber = $_POST['batchNumber'];
    $caseNumber = $_POST['caseNumber'];
    $unitInt = $_POST['unitInt'];
    $packing = $_POST['packing'];
    $type = $_POST['prodType'];
    $bottle = $_POST['bottle'];
    $exciseRate = $_POST['exciseRate'];
    $purchaseRate = $_POST['purchaseRate'];
    $toatlAmount= $_POST['toatlAmount'];

 $insertQueryMainLong = "INSERT INTO dailyproductadd (_id, vendorName, tpNumber, billNumber, recievedDate, invoiceDate, tpDate, itemName, batchNumber, caseNumber, unitInt,packing , prodType , bottle, exciseRate, purchaseRate, toatlAmount) 
        VALUES ('', '$vendorName', '$tpNumber', '$billNumber', '$recievedDate', '$invoiceDate', '$tpDate', '$itemName', '$batchNumber', '$caseNumber', '$unitInt','$packing', '$type', '$bottle', '$exciseRate', '$purchaseRate', '$toatlAmount');";


    mysqli_query($connect, $insertQueryMainLong) or die (mysqli_error($connect));
	mysqli_close($connect);
    echo "whatever it be!";



}

echo "<h1><center>need no Worry just POST 
Reqz goes here no junks</h1></center>";

?>