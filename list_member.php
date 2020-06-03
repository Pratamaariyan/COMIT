<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$members = query("SELECT * FROM members");

// press search button
if (isset($_POST["search"])) {
    $members = search($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Member COMIT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="table-title">
        <span>Daftar Member COMIT</span>
    </div>

    <form action="" method="post">
    <div class="search-box">
        <input class="search-txt" type="text" name="keyword" placeholder="search..." autocomplete="off">
        <button class="search-btn" type="submit" name="search">
            <i class="fa fa-search"></i>
        </button>
    </div>
    </form>
    <main>
    <table class="content-table">
        <thead>
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Foto</th>
                <th class="text-center">NPM</th>
                <th class="text-center">Tempat Lahir</th>
                <th class="text-center">Tanggal Lahir</th>
                <th class="text-center">Jurusan</th>
                <th class="text-center">Semester</th>
                <th class="text-center">J-K</th>
                <th class="text-center">E-mail</th>
                <th class="text-center">Whatsapp</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Skill</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $i = 1; ?>
            <?php foreach ($members as $member) : ?>
            <tr>
                <td scope="row" class="text-center"><?= $i; ?></td>
                <td><?= $member["name"]; ?></td>
                <td><img src="images/member/<?= $member["image"]; ?>" width="50" alt=""></td>
                <td><?= $member["npm"]; ?></td>
                <td><?= $member["place_of_birth"]; ?></td>
                <td><?= $member["date_of_birth"]; ?></td>
                <td><?= $member["major"]; ?></td>
                <td class="text-center"><?= $member["semester"]; ?></td>
                <td><?= $member["gender"]; ?></td>
                <td><?= $member["email"]; ?></td>
                <td><?= $member["whatsapp"]; ?></td>
                <td><?= $member["address"]; ?></td>
                <td><?= $member["skill"]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $member["id"]; ?>" class="edit-button"><i class="fa fa-edit"></i></a>
                    <a href="delete.php?id=<?= $member["id"]; ?>" class="delete-button" onclick="return confirm('hapus data?');"><i class="fa fa-trash"></i></i></a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    </main>

    <a href="logout.php">logout</a>

</body>

</html>