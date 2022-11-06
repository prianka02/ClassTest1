<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method=get action=index.php>
        <?php
        require_once('db_connect.php');
        $connect = mysqli_connect(HOST, USER, PASS, DB)
            or die("Can not connect");


        $results = mysqli_query($connect, "SELECT * FROM employee_leave")
            or die("Can not execute query");


        while ($rows = mysqli_fetch_array($results)) {
            extract($rows);
            echo "<tr>";
            echo "<td> $Employee_ID</td>";
            echo "<td> $Employee_Name </td>";
            echo "<td> $Leave_Application_Date </td>";
            echo "<td> $Leave_Request_Date </td>";
            echo "<td> $Leave_Approval_Date </td>";
            echo "<td> $Cause_Of_Leave </td>";

            echo "</tr> \n";
        }
        ?>
        <a href=LeaveApplicationInput.php><button>Click</button></a>
    </form>
</body>

</html>