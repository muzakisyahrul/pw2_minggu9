<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method POST</title>
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
    <?php if (isset($_POST["submit"])) { ?>
        <h1>Selamat Datang , <?= $_POST["nama"] ?></h1>
    <?php } ?>
    <fieldset>
        <form method="POST">
            Masukkan Nama Anda:<br>
            <input type="text" name="nama">
            <br>
            <br>
            <button type="submit" name="submit">Kirim</button>
        </form>
    </fieldset>

</body>

</html>