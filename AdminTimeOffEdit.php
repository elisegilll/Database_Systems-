<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "ysjcs.net";
$username = "elise.gill";
$password = "X3JM7US5";
$dbname = "elisegillnew";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['RequestID'])) {
    $requestID = $_GET['RequestID'];

    $sql = "SELECT * FROM TimeOffRequests WHERE RequestID = '$requestID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        echo "<form action='AdminTimeOffUpdate.php' method='post'>";
        echo "RequestID: <input type='text' name='RequestID' value='" . $row["RequestID"] . "' readonly><br>";
        echo "EmployeeID: <input type='text' name='EmployeeID' value='" . $row["EmployeeID"] . "'><br>";
        echo "StartDate: <input type='text' name='StartDate' value='" . $row["StartDate"] . "'><br>";
        echo "EndDate: <input type='text' name='EndDate' value='" . $row["EndDate"] . "'><br>";
        echo "Status: <input type='text' name='Status' value='" . $row["Status"] . "'><br>";
        echo "<input type='submit' value='Update'>";
        echo "</form>";
    } else {
        echo "Employee not found";
    }
} else {
    echo "TimeOff ID not provided";
}

?>