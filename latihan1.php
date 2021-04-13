<?php
$rumah = [
    [
        'gambar' => 'img/gb1.jpg',
        'nama' => "The Cordoba",
        'tipe' => "318/245",
        'luas_bangunan' => "318 m2",
        'luas_tanah' => "245 m2"
    ],
    [
        'gambar' => 'img/gb2.jpg',
        'nama' => "The Vandhana",
        'tipe' => "45/80",
        'luas_bangunan' => "318 m2",
        'luas_tanah' => "245 m2"
    ],
    [
        'gambar' => 'img/gb3.jpg',
        'nama' => "The Prayatna",
        'tipe' => "150/144",
        'luas_bangunan' => "150 m2",
        'luas_tanah' => "144  m2"
    ],
    [
        'gambar' => 'img/gb4.jpg',
        'nama' => "The Amogha",
        'tipe' => "140/135",
        'luas_bangunan' => "140 m2",
        'luas_tanah' => "135  m2"
    ],
    [
        'gambar' => 'img/gb5.jpg',
        'nama' => "The Boulevard",
        'tipe' => "202/333",
        'luas_bangunan' => "202 m2",
        'luas_tanah' => "333  m2"
    ],
    [
        'gambar' => 'img/gb6.jpg',
        'nama' => "The Urban Cluster",
        'tipe' => "85/88",
        'luas_bangunan' => "50 m2",
        'luas_tanah' => "90  m2"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
    <style>
        body {
            font-family: 'Franklin Gothic', Arial, sans-serif;
            padding: 20px;
        }

        .baris {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .kolom {
            display: flex;
            flex-direction: column;
            flex-basis: 100%;
            flex: 1;
        }


        .kotak {
            background-color: #fff;
            margin-top: 20px;
            padding: 10px;
            border-radius: 3px;
            box-shadow: 0 1px 40px 0 rgb(0 0 0 / 30%);
            margin-right: 10px;
        }

        .kotak img {
            width: 100px;
            margin-right: 20px;
        }

        .kotak {
            border: 3px solid #fff;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: #000;
        }

        .kotak:hover {
            border: 3px solid orange;
        }
    </style>
</head>

<body>
    <h1>Daftar Rumah</h1>
    <div class="baris">
        <?php foreach ($rumah as $r) : ?>
            <a href="latihan2.php?nama=<?= $r['nama'] ?>&gambar=<?= $r['gambar'] ?>&tipe=<?= $r['tipe'] ?>&luas_bangunan=<?= $r['luas_bangunan'] ?>&luas_tanah=<?= $r['luas_tanah'] ?>">
                <div class="kotak">
                    <div class="baris">
                        <img src="<?= $r['gambar'] ?>" />
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?= $r['nama'] ?></td>
                            </tr>
                            <tr>
                                <td>Tipe</td>
                                <td>:</td>
                                <td><?= $r['tipe'] ?></td>
                            </tr>
                            <tr>
                                <td>Luas Bangunan</td>
                                <td>:</td>
                                <td><?= $r['luas_bangunan'] ?></td>
                            </tr>
                            <tr>
                                <td>Luas Tanah</td>
                                <td>:</td>
                                <td><?= $r['luas_tanah'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </a>
        <?php endforeach ?>
    </div>
</body>

</html>