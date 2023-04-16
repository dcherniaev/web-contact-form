<?php
require __DIR__ . '/cleardata.php';

$issue = $name = $email = $message = "";
$issueErr = $nameErr = $emailErr = $messageErr = "";

if (empty($_POST["issue"])) {
    $issueErr = "Issue is required";
} else {
    $issue = clear_data($_POST["issue"]);
}
if (empty($_POST["name"])) {
    $nameErr = "Name is required";
} else {
    $name = clear_data($_POST["name"]);
}
if (empty(clear_data($_POST["email"]))) {
    $emailErr = "Email is required";
} else {
    $email = clear_data($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
}
if (!empty($_POST["message"])) {
    $message = clear_data($_POST["message"]);
}
?>
<html>
<head>
    <title>check input data</title>
</head>
<body>
<table>
    <tr>
        <td>Issue:</td>
        <td><?php echo $issue ?><?php echo $issueErr ?></td>
    </tr>
    <tr>
        <td>Name:</td>
        <td><?php echo $name ?><?php echo $nameErr ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php if ($emailErr == "") {
                echo $email;
            } else {
                echo $emailErr;
            } ?>
        </td>
    </tr>
    <tr>
        <td>Message:</td>
        <td><?php echo $message ?><?php echo $messageErr ?></td>
    </tr>
    <tr>
        <td>
            <form action="/index.php" method="post">
                <input type="hidden" name="issue" value="<?php echo $issue ?>">
                <input type="hidden" name="name" value="<?php echo $name ?>">
                <input type="hidden" name="email" value="<?php echo $email ?>">
                <input type="hidden" name="message" value="<?php echo $message ?>">
                <input type="submit" value="Edit">
            </form>
        </td>
        <td>
            <?php if ($issueErr == "" && $nameErr == "" && $emailErr == "" && $messageErr == "") : ?>
                <form action="/sendtodb.php" method="post">
                    <input type="hidden" name="issue" value="<?php echo $issue ?>">
                    <input type="hidden" name="name" value="<?php echo $name ?>">
                    <input type="hidden" name="email" value="<?php echo $email ?>">
                    <input type="hidden" name="message" value="<?php echo $message ?>">
                    <input type="submit" value="Submit">
                </form>
            <?php endif; ?>

        </td>
    </tr>
</table>

</body>
</html>