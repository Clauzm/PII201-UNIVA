<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Insert users form</h2>
    <form action="../php/insert_users_controller.php" method="POST">
    <input type="text" name="username" placeholder="Insert user name">
        <input type="email" name="useremail" placeholder="Insert user email">
        <input type="text" name="userpassword" placeholder="Insert password">
        <input type="submit" value="Enter">
    </form>
</body>
</html>