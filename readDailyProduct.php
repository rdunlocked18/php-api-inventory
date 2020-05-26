<?php

	require 'config/connectionInject.php';
	//readDailyProductJson();

readDailyProductJson();
function readDailyProductJson(){
    global $connect;

    $readQuery = "SELECT * FROM dailyproductadd;";
    $result = mysqli_query($connect,$readQuery);
    $number_of_rows = mysqli_num_rows($result);
    $tempArray = array();
    if($number_of_rows > 0){

        while($rows = mysqli_fetch_assoc($result)){
            $tempArray[] = $rows;
        }
    }
    header('Content-Type: application/json');
    echo json_encode($tempArray);
    mysqli_close($connect);

}


?>