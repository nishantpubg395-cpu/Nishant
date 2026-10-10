<?php

include("c onnection.php");

$data = $connection->query("SELECT * FROM employees");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee Dashboard</h1>

    <a href="empDetailsForm.php">
        <button>Add Employee</button>
    </a>
    <br><br>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>Employee Age</th>
            <th>Employee Salary</th>
            <th>Employee Gender</th>
            <th>Employee Skills</th>
        </tr>

        <?php
        foreach ($data as $row) {
            ?>
        <tr>
            <td> <?php echo $row["ID"]  ?></td>
            <td> <?php echo $row["EmployeeName"] ?></td>
            <td> <?php echo $row["EmployeeAge"] ?></td>
            <td> <?php echo $row["EmployeeSalary"] ?></td>
            <td> <?php echo $row["EmployeeGender"] ?></td>
            <td> <?php echo $row["EmployeeSkills"] ?></td>
        </tr>
        <?php 
         }
         ?>
    </table>
</body>
</html>