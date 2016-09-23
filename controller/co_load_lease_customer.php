<?php

//session_start();

$conn = mysqli_connect("77.104.142.97", "ayolanin_dev", "WelComeDB1129", "ayolanin_test");
if (mysqli_connect_errno()) {
    echo "Falied to Connect the Database" . mysqli_connect_error();
}

$customer_nic = filter_input(INPUT_GET, 'cus_nic');

$fix_rate = filter_input(INPUT_GET, 'fix_rate');
$period = filter_input(INPUT_GET, 'period');
$vehicle_category = filter_input(INPUT_GET, 'vehicle_category');

//customer detail loading
if ($customer_nic != "" && $customer_nic != null) {
    global $conn;
    $sql_query = "SELECT * FROM customer WHERE cus_nic='$customer_nic'";
    $run_query = mysqli_query($conn, $sql_query);

    if (mysqli_num_rows($run_query) > 0) {
        if ($row = mysqli_fetch_assoc($run_query)) {
            $cus_name = $row['cus_fullname'];
            echo $cus_name;
        }
    }
}
//customer detail loading
//setting the service installment
if ($fix_rate != "" && $period != "" && $vehicle_category != "") {
    if ($vehicle_category == "0") {
        echo 'Please select category before get installment';
    } else if ($vehicle_category == "1") {
        $installment = ((floatval($fix_rate) / intval($period)) + ((3.96 / 100) * floatval($fix_rate)));
        $vals = number_format($installment + 0.5, -10);
        echo str_replace(",", "", $vals);
    } else if ($vehicle_category == "2") {
        $installment = ((floatval($fix_rate) / intval($period)) + ((2.96 / 100) * floatval($fix_rate)));
        $vals = number_format($installment + 0.5, -10);
        echo str_replace(",", "", $vals);
    } else {
        $installment = ((floatval($fix_rate) / intval($period)) + ((2.96 / 100) * floatval($fix_rate)));
        $vals = number_format($installment + 0.5, -10);
        echo str_replace(",", "", $vals);
    }
}
//setting the service installment


