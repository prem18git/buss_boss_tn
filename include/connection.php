<?php
// include '../display_error.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function db()
{
    $host = "127.0.0.1";
    $username = 'root';
    $password = '';
    $database = 'buss_timing';
    $port = '3306';
    try {
        $db = mysqli_connect($host, $username, $password, $database, $port);
        if ($db) {
            echo "the db is connected successfully";
            return $db;
        } else {
            echo "db connection failed";
            return null;
        }
    } catch (Exception $ex) {
        die($ex);
    }
}
$db = db();

function check(){
    $arrival = $_POST['arrival'];
    $departure = $_POST['departure'];
    $sql_query = "SELECT * FROM bus_details WHERE arrival='$arrival' AND departure='$departure'";
    $result = $GLOBALS['db']->query($sql_query);
    if ($result->num_rows > 0) {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc()){
            echo "Arrival - " .$row["arrival"]. " | Departure: " .
                $row["departure"]. " | Service: " . 
                $row["service_type"]. " | Arrival Time : " . 
                $row["arrival_time"]."| Departure Time:".$row["departure_time"]."<br>";
        }
    } else {
        echo "0 results";
    }
}

?>
