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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['RequestID'])) {
        $requestID = $_POST['RequestID'];
        $employeeID = $_POST['EmployeeID'];
        $startDate = $_POST['StartDate'];
        $endDate = $_POST['EndDate'];
        $status = $_POST['Status'];

  
        $sql = "UPDATE TimeOffRequests SET EmployeeID = '$employeeID', StartDate = '$startDate', EndDate = '$endDate', Status = '$status' WHERE RequestID = '$requestID'";

 
        $result = $conn->query($sql);

        if ($result === TRUE) {
            echo "Time off request updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: RequestID not provided in the form data";
    }
}

$conn->close();
?>