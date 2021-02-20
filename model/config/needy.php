<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'khms';
$conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$id = rand();
$name = $_POST['name'];
$nId = $_POST['nId'];
$phone = $_POST['phone'];
$GF = $_POST['GF'];
$street = $_POST['street'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$file = $_POST['file'];

$INSERT = "INSERT INTO  `needy`(`id`, `name`, `national-id`, `phone`, `group-followed`, `street`, `city`, `zip`, `midicane-req`) VALUES ('$id','$name', '$nId', '$phone', '$GF', '$street', '$city', '$zip', '$file')";
$result = mysqli_query($conn, $INSERT);
echo $result;

if ($result) {
    echo 'inserted';
} else {
    echo 'not inserted';
}
// mysqli_free_result($result);
mysqli_close($conn);
header("Location:../../view/needy/confirmReq.php");