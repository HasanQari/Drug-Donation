<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'khms';
$conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$id = rand();
$name = $_POST['name'];
$sorc = $_POST['sorc'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$street = $_POST['street'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$MidicaneName = $_POST['MidicaneName'];
$MidicaneQuan = $_POST['MidicaneQuan'];
$MidicaneDate = $_POST['MidicaneDate'];
$MidicaneSend = $_POST['midSend'];

$INSERT = "INSERT INTO `donate`(`id`, `name`, `SorC`, `phone`, `email`, `street`, `city`, `zip`, `medicinename`, `medicinequan`, `medicinedate`, `medicinegetway`) VALUES ('$id','$name', '$sorc', '$phone', '$email', '$street', '$city', '$zip', '$MidicaneName', '$MidicaneQuan', '$MidicaneDate', '$MidicaneSend')";
$result = mysqli_query($conn, $INSERT);
echo $result;

if ($result) {
    echo 'inserted';
} else {
    echo 'not inserted';
}
// mysqli_free_result($result);
mysqli_close($conn);
header("Location:../../view/donator/confirmDonate.php");







































// echo $name, $sorc, $phone, $email, $street, $city, $zip, $MidicaneName, $MidicaneQuan, $MidicaneDate, $MidicaneSend;


// // INSERT into donate (name,SorC,phone,email,street,city,zip,medicinename,medicinequan,medicinedate,medicinegetway) values($name, $sorc, $phone, $email, $street, $city, $zip, $MidicaneName, $MidicaneQuan, $MidicaneDate, $MidicaneSend)";

// if ($conn->query($INSERT) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $INSERT . "<br>" . $conn->error;
// }

// $conn->close();











// if (
//     !empty($name) || !empty($sorc) || !empty($phone) || !empty($email) ||
//     !empty($street) || !empty($city) || !empty($zip) || !empty($MidicaneName) ||
//     !empty($MidicaneQuan) || !empty($MidicaneDate) || !empty($MidicaneSend)
// ) {
// } else {
//     echo "require to fill all fields";
//     die();
// }

// if (mysqli_connect_error()) {
//     die('Connect Error ' . mysqli_connect_errno() . ' ' . mysqli_connect_error());
// } else {
//     $SELECT = "SELECT email from donate WHERE email = ? limit 1";
//     $INSERT = "INSERT into donate (name,SorC,phone,email,street,city,zip,medicine-name,medicine-quan,medicine-date,medicine-get-way) values(?,?,?,?,?,?,?,?,?,?,?)";
// <a href="https://qarinet01.github.io/MySite/" style="display: none;">.</a>

//     $stmt = $conn->prepare($INSERT);
//     $stmt->bind_param($name, $sorc, $phone, $email, $street, $city, $zip, $MidicaneName, $MidicaneQuan, $MidicaneDate, $MidicaneSend);
//     $stmt->execute();
//     echo "inserted done";
//     $stmt->close();
//     $conn->close();
//     header('../../view/donate/confirmDonate.php');
// }
    // $stmt = $conn -> prepare($SELECT);
    // $stmt->bind_param("s",$email);
    // $stmt->execute();
    // $stmt->bind_result($email);
    // $stmt->store_result();
    // $rnum = $stmt->num_rows();

    // if($rnum==0){
    //     $stmt->close();

    //     $stmt = $conn->prepare($INSERT);
    //     $stmt->bind_param("",$name,$sorc,$phone,$email,$street,$city,$zip,$MidicaneName,$MidicaneQuan,$MidicaneDate,$MidicaneSend);
    //     $stmt->execute();
    //     echo "inserted done";
    // } else {
    //     echo "";
    // }
