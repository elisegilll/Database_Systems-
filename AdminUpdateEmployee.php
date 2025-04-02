<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $servername = "ysjcs.net";
    $username = "elise.gill";
    $password = "X3JM7US5";
    $dbname = "elisegillnew";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $employeeID = $_POST['EmployeeID'];
    $newFirstName = $_POST['NewFirstName'];
    $newEmail = $_POST['NewEmail'];
    $newContact = $_POST['NewContact'];
    $newAddress = $_POST['NewAddress'];
    $newDob = $_POST['NewDoB'];
    $newDepartmentID = $_POST['NewDepartmentID'];
    $newSalaryID = $_POST['NewSalaryID'];


    $sql = "UPDATE EmployeeInformation 
            SET FirstName = '$newFirstName', 
                Email = '$newEmail', 
                Contact = '$newContact', 
                Address = '$newAddress', 
                DoB = '$newDob', 
                DepartmentID = '$newDepartmentID', 
                SalaryID = '$newSalaryID' 
            WHERE EmployeeID = '$employeeID'";

    if ($conn->query($sql) === TRUE) {
        echo "Employee data updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
?>