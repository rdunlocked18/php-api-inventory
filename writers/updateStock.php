<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'config/connectionInject.php';
	stockUpdater();
}
    function stockUpdater(){
        global $connect;

        $itemName = $_POST['productName'];
        $totalSaleRemain = $_POST['totalSale'];
        
        
        $updateQuery = "UPDATE `dailyproductadd` 
                        SET `bottle` = '$totalSaleRemain' 
                        WHERE `itemName` = '$itemName'; ";


         
        mysqli_query($connect, $updateQuery) or die (mysqli_error($connect));
	    mysqli_close($connect);

    }


?>