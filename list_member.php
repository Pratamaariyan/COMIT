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
    <title>COMIT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="t-center m-t-30 m-b-20">
        <span class="tit7">Daftar Member COMIT</span>
    </div>

    <form action="" method="post">
        <input type="text" name="keyword" class="m-t-50 m-b-10" placeholder="search..." autocomplete="off">
        <button type="submit" name="search" class="btn btn-primary">Cari</button>
    </form>

    <table class="content-table">
        <thead>
            <tr>
                <th class="text-center" scope="col">No.</th>
                <th class="text-center" scope="col">Nama</th>
                <th class="text-center" scope="col">Foto</th>
                <th class="text-center" scope="col">NPM</th>
                <th class="text-center" scope="col">Tempat Lahir</th>
                <th class="text-center" scope="col">Tanggal Lahir</th>
                <th class="text-center" scope="col">Jurusan</th>
                <th class="text-center" scope="col">Semester</th>
                <th class="text-center" scope="col">J-K</th>
                <th class="text-center" scope="col">E-mail</th>
                <th class="text-center" scope="col">Whatsapp</th>
                <th class="text-center" scope="col">Alamat</th>
                <th class="text-center" scope="col">Skill</th>
                <th class="text-center" scope="col">Action</th>
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
                <td width="100px">
                    <a href="edit.php?id=<?= $member["id"]; ?>">Edit</a>
                    <a href="delete.php?id=<?= $member["id"]; ?>" onclick="return confirm('hapus data?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="logout.php">logout</a>

</body>

</html>