<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

//get data from url
$id = $_GET["id"];

//query data member by id
$member = query("SELECT * FROM members WHERE id = $id")[0];

// check submit button
if (isset($_POST["submit"])) {
    //check data success or failed
    if (edit($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'list_member.php';
            </script>";
    } else {
        echo "<script>
                alert('data gagal diubah');
                document.location.href = 'list_member.php';
            </script>";
    }
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
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="images/icons/Robocom.svg" alt="Robocom" />
                <h5>Community of Information Technology</h5>
                <p>Salam Teknologi !</p>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading title-register">Edit Data Anggota COMIT</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="hidden" name="id" class="form-control"
                                            value="<?= $member["image"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="lastimage" class="form-control"
                                            value="<?= $member["id"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"
                                            value="<?= $member["name"]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="npm" class="form-control"
                                            value="<?= $member["npm"]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="place_of_birth" class="form-control"
                                            value="<?= $member["place_of_birth"]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="date_of_birth" class="form-control"
                                            value="<?= $member["date_of_birth"]; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <select name="major" class="form-control" required>
                                            <option class="hidden" selected disabled><?= $member["major"]; ?>
                                            </option>
                                            <option>Sistem Informasi</option>
                                            <option>Teknik Informatika</option>
                                            <option>Manajemen</option>
                                            <option>Akuntansi</option>
                                            <option>Sistem Informasi Akuntansi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="semester" class="form-control" required>
                                            <option class="hidden" selected disabled><?= $member["semester"]; ?>
                                            </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="L">
                                                <span> Laki-laki </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="P">
                                                <span> Perempuan</span>
                                            </label>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                        value="<?= $member["email"]; ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="whatsapp" minlength="10" maxlength="13"
                                        class="form-control" value="<?= $member["whatsapp"]; ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control"
                                        value="<?= $member["address"]; ?>" required>
                                </div>
                                <div class="form-group">
                                    <select name="uniform_size" class="form-control" required>
                                        <option class="hidden" selected disabled><?= $member["uniform_size"] ?>
                                        </option>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>XXL</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="skill" class="form-control" required>
                                        <option class="hidden" selected disabled><?= $member["skill"] ?>
                                        </option>
                                        <option>Networking</option>
                                        <option>Programming</option>
                                        <option>Graphic Design</option>
                                        <option>Vidio Editing</option>
                                        <option>Animation</option>
                                        <option>Hardware</option>
                                        <option>Belum Ada</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <img src="img/<?= $member['image']; ?>" width="40">
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Edit Data</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>