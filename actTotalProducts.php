<?php

	require 'config/connectionInject.php';
	//readDailyProductJson();

totalProductsHome();
function totalProductsHome(){
    global $connect;

    $countQuery = "SELECT count(*) as 'prod_count' FROM dailyproductadd;";
    $sumOfBottles = "SELECT SUM(bottle) as 'bottle_count' FROM `dailyproductadd`;";
    $totalStockCost = "SELECT sum(toatlAmount) as 'total_stock_daily_amount' FROM `dailyproductadd`;";


    $result = mysqli_query($connect,$countQuery);
    $resultSum = mysqli_query($connect,$sumOfBottles);
    $resultCost = mysqli_query($connect,$totalStockCost);
    $number_of_rows = mysqli_num_rows($result);
    $number_of_rows_Sum = mysqli_num_rows($resultSum);
    $number_of_rows_cost = mysqli_num_rows($resultCost);
    $tempArray = array();
    $tempSum = array();
    if($number_of_rows > 0){

        while($rows = mysqli_fetch_assoc($result)){
            $tempArray[] = $rows;
        }
    }
    while($rowss = mysqli_fetch_assoc($resultSum)){
        $tempArray [] = $rowss;
    }

    while($rowsC = mysqli_fetch_assoc($resultCost)){
        $tempArray [] = $rowsC;
    }

    header('Content-Type: application/json');

    echo json_encode($tempArray);
   
    mysqli_close($connect);

}


?>