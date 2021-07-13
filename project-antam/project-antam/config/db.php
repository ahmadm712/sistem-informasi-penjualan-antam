<?php 
function connect() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "antam";

    $con = mysqli_connect($host, $username, $password, $database)
    or die(mysqli_connect_error());
    return $con;
}

function execute_query($con, $query) {
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    return $result;
}

function close($conn) {
    mysqli_close($conn);
}

?>