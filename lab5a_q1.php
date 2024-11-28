<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q1</title>
</head>
<style>
table, th, td {
  border: 1px solid;
}
td{
    text-align: center;
    padding: 1vh;
    width: 6vw;
}
</style>
<body>
<?php
    $name = "Alister Chong Yuan Bang";
    $matricNum = "CI230081";
    $course = "Computer Science";
    $yearStudy = "2";
    $address = "Johor Bahru, Johor";
?>

    <table>
        <tr>
            <th>Name</th>
            <th>Matric Number</th>
            <th>Course</th>
            <th>Year of Study</th>
            <th>Address</th>
        </tr>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $matricNum; ?></td>
            <td><?php echo $course; ?></td>
            <td><?php echo $yearStudy; ?></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>

</body>
</html>