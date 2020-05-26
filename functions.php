<?php
$conn = mysqli_connect("localhost", "root", "", "comit");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function add($data)
{
    global $conn;
    //get data from element in form
    $name = htmlspecialchars($data["name"]);
    $npm = htmlspecialchars($data["npm"]);
    $place_of_birth = htmlspecialchars($data["place_of_birth"]);
    $date_of_birth = htmlspecialchars($data["date_of_birth"]);
    $major = htmlspecialchars($data["major"]);
    $semester = htmlspecialchars($data["semester"]);
    $gender = htmlspecialchars($data["gender"]);
    $email = htmlspecialchars($data["email"]);
    $whatsapp = htmlspecialchars($data["whatsapp"]);
    $address = htmlspecialchars($data["address"]);
    $uniform_size = htmlspecialchars($data["uniform_size"]);
    $skill = htmlspecialchars($data["skill"]);

    // upload image
    $image = upload();
    if (!$image) {
        return false;
    }

    //query insert data
    $query = "INSERT INTO members VALUES
                ('', '$name', '$npm', '$place_of_birth', '$date_of_birth', 
                '$major', '$semester', '$gender', '$email', '$whatsapp',
                '$address', '$uniform_size', '$skill', '$image')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{

    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    // check available image to upload
    if ($error === 4) {
        echo "<script>
                alert('Silahkan pilih gambar');
            </script>";
        return false;
    }

    // check file size
    if ($fileSize > 1000000) {
        echo "<script>
                 alert('Ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // check image extention
    $validImageExtention = ['jpg', 'jpeg', 'png'];
    $imageExtention = explode('.', $fileName);
    $imageExtention = strtolower(end($imageExtention));
    if (!in_array($imageExtention, $validImageExtention)) {
        echo "<script>
                alert('Silahkan pilih file gambar');
            </script>";
        return false;
    }

    // generate new image name
    $newFileName = uniqid();
    $newFileName .= '.';
    $newFileName .= $imageExtention;

    // upload success
    move_uploaded_file($tmpName, 'images/member/' . $newFileName);

    return $newFileName;
}

function delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM members WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    //get data from element in form
    $id = $data["id"];
    $name = htmlspecialchars($data["name"]);
    $npm = htmlspecialchars($data["npm"]);
    $place_of_birth = htmlspecialchars($data["place_of_birth"]);
    $date_of_birth = htmlspecialchars($data["date_of_birth"]);
    $major = htmlspecialchars($data["major"]);
    $semester = htmlspecialchars($data["semester"]);
    $gender = htmlspecialchars($data["gender"]);
    $email = htmlspecialchars($data["email"]);
    $whatsapp = htmlspecialchars($data["whatsapp"]);
    $address = htmlspecialchars($data["address"]);
    $uniform_size = htmlspecialchars($data["uniform_size"]);
    $skill = htmlspecialchars($data["skill"]);

    // check admin choose new file or not
    if ($_FILES['image']['error'] === 4) {
        $image = $lastImage;
    } else {
        $image = upload();
    }
    $lastImage = htmlspecialchars($data["lastImage"]);

    $image = htmlspecialchars($data["image"]);

    //query insert data
    $query = "UPDATE members SET 
                name = '$name',
                npm = '$npm',
                place_of_birth = '$place_of_birth',
                date_of_birth = '$place_of_birth',
                major = '$major',
                semester = '$semester',
                gender = '$gender',
                email = '$email',
                whatsapp = '$whatsapp',
                address = '$address',
                uniform_size = '$uniform_size',
                skill = '$skill',
                image = '$image'
            WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function search($keyword)
{
    $query = "SELECT * FROM members 
                WHERE 
            name LIKE '%$keyword%' OR
            npm LIKE '%$keyword%' OR
            major LIKE '%$keyword%' OR
            semester LIKE '%$keyword%' OR
            gender LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            whatsapp LIKE '%$keyword%' OR
            skill LIKE '%$keyword%'
            ";

    return query($query);
}

function registration($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $conpassword = mysqli_real_escape_string($conn, $data["conpassword"]);

    // check available username
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username already taken');
            </script>";
        return false;
    }

    // password confirmation
    if ($password !== $conpassword) {
        echo "<script>
                alert('password confirmation is invalid');
            </script>";
        return false;
    }

    // password encryption
    $password = password_hash($password, PASSWORD_DEFAULT);

    // insert user to database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}