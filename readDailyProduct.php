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
    echo json_encode(array("addedProducts"=>$tempArray));
    mysqli_close($connect);

}

echo "<h1><center>need no Worry just POST 
Reqz goes here no junks</h1></center>";

?>