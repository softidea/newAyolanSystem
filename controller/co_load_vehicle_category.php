<?php

$conn = mysqli_connect("77.104.142.97", "ayolanin_dev", "WelComeDB1129", "ayolanin_test");
//$conn = mysqli_connect("localhost", "root", "1234", "ayolanin_datahost");
if (mysqli_connect_errno()) {
    echo "Falied to Connect the Database" . mysqli_connect_error();
}


$cat_load = filter_input(INPUT_GET, 'cat_load');

if ($cat_load != null && $cat_load != "") {
    function load_vehicle_category(){
        global $conn;
        $sql_query = "SELECT * FROM vehicle_category WHERE status='Active'";
        $run_query = mysqli_query($conn, $sql_query);
        while ($row_query = mysqli_fetch_array($run_query)) {
            $category_id = $row_query['category_id'];
            $category = $row_query['category'];
            echo $category;
            echo "<option value='$category_id'>$category</option>";
        }
    }
}

//if (isset($_GET['mode'])) {
//    $vt_id = intval($_GET['mode']);
//
//    define('db_host', '107.180.14.32');
//    define('db_port', '3306');
//    define('db_user', 'ayolandeveloper');
//    define('db_password', 'WelComeDB1129');
//    define('db_database', 'ayolan_datahost');
//
//    $d_bc = mysqli_connect(db_host, db_user, db_password, db_database) or die('Could not connect to MySql: ' . mysqli_connect_error());
//
//    $sql_query = "SELECT DISTINCT type FROM ser_vehicles_pre WHERE vehicle_type_id=$vt_id";
//    $run_query = mysqli_query($d_bc, $sql_query);
//    echo "<option value='0'>~~Select Pre Code~~</option>";
//    while ($row_query = mysqli_fetch_array($run_query)) {
//        $mod = $row_query['type'];
//        echo "<option value='$mod'>$mod</option>";
//    }
//    echo "<option value='newmodel'>~~Add New Model~~</option>";
//}
?>