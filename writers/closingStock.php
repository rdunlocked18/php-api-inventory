<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        require 'config/connectionInject.php';
        closingStockMaker();
    }

 function closingStockMaker(){

    global $connect;
    echo "check pass";

    $id  = $_POST['id'];
    $product_name  = $_POST['product_name'];
    $packing  = $_POST['packing'];
    $unit  = $_POST['unit'];
    $batchNumber  = $_POST['batchNumber'];
    $ratePerBottle  = $_POST['ratePerBottle'];
    $totalAmount = $_POST['totalAmount'];
    $openingBottleStock	  = $_POST['openingBottleStock'];
    $closingBottleStock  = $_POST['closingBottleStock'];
    $totalSale  = $_POST['totalSale'];

    $insertToClosing = "INSERT INTO `closing_stock` (`id`, 
                        `product_name`, 
                        `packing`, 
                        `unit`,
                        `batchNumber`,
                        `ratePerBottle`,
                        `totalAmount`, 
                        `openingBottleStock`, 
                        `closingBottleStock`, 
                        `totalSale`) VALUES (NULL, '$product_name', '$packing',
                                            '$unit', '$batchNumber', 
                                            '$ratePerBottle', '$totalAmount',
                                            '$openingBottleStock', '$closingBottleStock', '$totalSale');";


    $updateQuery = "UPDATE `dailyproductadd` 
                        SET `bottle` = '$totalSale' 
                        WHERE `dailyproductadd`.`itemName` = '$product_name'; ";



            mysqli_query($connect, $insertToClosing) or die (mysqli_error($connect));
            
            mysqli_close($connect);
            echo "whatever it be!";



 }


?>