<?php

$issue = $_POST['issue'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

?>
<html>
<head>
    <title>check input data</title>
</head>
<body>
<table>
    <tr>
        <td>Issue:</td><td><?php echo $issue ?></td>
    </tr>
    <tr>
        <td>Name:</td><td><?php echo $name ?></td>
    </tr>
    <tr>
        <td>Email:</td><td><?php echo $email ?></td>
    </tr>
    <tr>
        <td>Message:</td><td><?php echo $message ?></td>
    </tr>
</table>
</body>
</html>