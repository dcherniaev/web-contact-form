<?php
require __DIR__ . '/cleardata.php';

$issue = $name = $email = $message = "";

if (!empty($_POST["issue"])) {
    $issue = clear_data($_POST["issue"]);
}
if (!empty($_POST["name"])) {
    $name = clear_data($_POST["name"]);
}
if (!empty($_POST["email"])) {
    $email = clear_data($_POST["email"]);
}

if (!empty($_POST["message"])) {
    $message = clear_data($_POST["message"]);
}

switch ($issue){
    case "query":
        $query = $issue;
        break;
    case "feedback":
        $feedback = $issue;
        break;
    case "complaint":
        $complaint = $issue;
        break;
    case "order":
        $order = $issue;
        break;
}
?>
<html>
<head>
    <title>web-contact-form</title>
</head>
<body>
<form action="/check.php" method="post">
    Issue: <br>
    <input type="radio" id="query" name="issue" value="query" <?php if (isset($query)){ echo "checked";} ?>>
    <label for="query">Query</label><br>
    <input type="radio" id="feedback" name="issue" value="feedback" <?php if (isset($feedback)){ echo "checked";} ?>>
    <label for="feedback">Feedback</label><br>
    <input type="radio" id="complaint" name="issue" value="complaint" <?php if (isset($complaint)){ echo "checked";} ?>>
    <label for="complaint">Complaint</label><br>
    <input type="radio" id="order" name="issue" value="order" <?php if (isset($order)){ echo "checked";} ?>>
    <label for="order">Order</label><br>

    Name: <br>
    <input required type="text" name="name" value="<?php echo $name ?>">
    <br>
    Email: <br>
    <input required type="text" name="email" value="<?php echo $email ?>">
    <br>
    Message: <br>
    <textarea required name="message" cols="50" rows="10"><?php echo $message ?></textarea>
    <br>
    <input type="submit" value="Next">
</form>
</body>
</html>
