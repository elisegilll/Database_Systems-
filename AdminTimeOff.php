
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Pro</title>
    <link rel="stylesheet" type="text/css" href="AdminHome.css" />

<!-- header -->
<div class="wrapper">
    <nav class="navbar">
        <img class="logo" src="PAYROLLPRO.png">
        <ul>
            <li><a href="AdminHome.html">Home</a></li>
            <li><a href="AdminLogin.html">Log Out</a></li>
            <li><a href="AdminAddTimeOff.html">Add Employee</a></li>
        </ul>
    </nav>
</div>

<style>
    .tableheader {
        margin-top: -50%;
    }

</style>
</head>

<body>

    <div class="tableheader">
        <h2>Time Off:</h2>
    </div> 

    <?php
    $servername = "ysjcs.net";
    $username = "elise.gill";
    $password = "X3JM7US5";
    $dbname = "elisegillnew";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM TimeOffRequests";
    $result = $conn->query($sql);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>RequestID</th><th>StartDate</th><th>EndDate</th><th>Status</th><th>EmployeeID</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["RequestID"] . "</td>";
            echo "<td>" . $row["StartDate"] . "</td>";
            echo "<td>" . $row["EndDate"] . "</td>";
            echo "<td>" . $row["Status"] . "</td>";
            echo "<td>" . $row["EmployeeID"] . "</td>";

            //editing data. 
            echo "<td><a href='AdminTimeOffEdit.php?RequestID=" . $row["RequestID"] . "'>Edit</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>

<style>
    table {
        border-collapse: collapse;
        width: 70%;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 2px;
        text-align: left;
    }

    td[data-align="right"] {
        text-align: right;
    }
</style>

    
</body>
</html>


