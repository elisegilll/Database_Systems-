<?php
$servername = "ysjcs.net";
$username = "elise.gill";
$password = "X3JM7US5";
$dbname = "elisegillnew";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employeeID = trim($_POST['EmployeeID']); 
    $startDate = $_POST['StartDate'];
    $endDate = $_POST['EndDate'];
    $providedPassword = $_POST['Password'];

    $passwordCheckQuery = "SELECT Password FROM TimeOffRequests WHERE EmployeeID='$employeeID'";
    $passwordCheckResult = $conn->query($passwordCheckQuery);

    if ($passwordCheckResult->num_rows > 0) {
        $row = $passwordCheckResult->fetch_assoc();
        $storedPassword = $row['Password'];

        if ($providedPassword === $storedPassword) {
    
            $updateRequestQuery = "UPDATE TimeOffRequests SET StartDate='$startDate', EndDate='$endDate' WHERE EmployeeID='$employeeID'";
            
            if ($conn->query($updateRequestQuery) === TRUE) {
                // Update the Status column to "PENDING"
                $updateStatusQuery = "UPDATE TimeOffRequests SET Status='PENDING' WHERE EmployeeID='$employeeID'";
                if ($conn->query($updateStatusQuery) === TRUE) {
                    echo "Time off updated successfully, Please return to homepage";
                } else {
                    echo "Error updating status: " . $conn->error;
                }
            } else {
                echo "Error updating time off: " . $conn->error;
            }
        } else {
            echo "Incorrect password. Time off update interrupted.";
        }
    } else {
        echo "Invalid ID.";
    }
}

$conn->close();
?>