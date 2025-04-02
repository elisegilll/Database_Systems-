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

    $taxID = $_POST['TaxID'];
    $taxpercentage = $_POST['TaxPercentage'];
    $taxamount = $_POST['TaxAmount'];
    $basesalary = $_POST['BaseSalary'];
    $employeeID = $_POST['EmployeeID'];



    $checkQuery = "SELECT * FROM TaxInformation WHERE TaxID = '$taxID'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {

        $updateQuery = "UPDATE TaxInformation SET TaxPercentage = '$taxpercentage', TaxAmount = '$taxamount', BaseSalary = '$basesalary', EmployeeID = '$employeeID'  WHERE TaxID = '$taxID'";
        $result = $conn->query($updateQuery);
    } else {
 
        $insertQuery = "INSERT INTO TaxInformation (TaxID, TaxPercentage, TaxAmount, BaseSalary, EmployeeID) VALUES ('$taxID', '$taxpercentage', '$taxamount', '$basesalary', '$employeeID)";
        $result = $conn->query($insertQuery);
    }

    if ($result) {
    
        header("Location: AdminTax.php");
        exit();
    } else {
        echo "Update/Insert failed: " . $conn->error;
    }
} else {
    echo "Invalid request";
}