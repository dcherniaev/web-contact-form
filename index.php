<html>
<head>
    <title>web-contact-form</title>
</head>
<body>
<form action="/check.php" method="post">
    Issue: <br>
    <select name = "issue">
        <option value="query">query</option>
        <option value="feedback">feedback</option>
        <option value="complaint">complaint</option>
        <option value="order">order</option>
    </select>
    <br>
    Name: <br>
    <input type="text" name="name">
    <br>
    Email: <br>
    <input type="text" name="email">
    <br>
    Message: <br>
    <textarea name="message" cols="50" rows="10">Write your message here</textarea>
    <br>
    <input type="submit" value="Send message">
</form>
</body>
</html>
