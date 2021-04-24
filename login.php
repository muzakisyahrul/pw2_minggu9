<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "12345") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            padding: 100px 400px;
        }

        input {
            width: 100%;
        }
    </style>
</head>

<body>

    <fieldset>
        <center>
            <h1>Login Admin</h1>
        </center>
        <?php if (isset($error)) { ?>
            <p style="color: red; font-style: italic;">Username atau password salah</p>
        <?php } ?>
        <form action="" method="post">
            <label for="username">Username : </label>
            <input type="text" id="username" name="username"><br>

            <label for="password">Password : </label>
            <input type="password" id="password" name="password">
            <br>
            <br>
            <button type="submit" name="submit">Login</button>

        </form>
    </fieldset>

</body>

</html>