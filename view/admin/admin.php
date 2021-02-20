<?php
session_start();

if ($_SESSION) {
    if ($_SESSION['name'] == "admin") {
        echo '<!DOCTYPE html>
            <html lang="ar" dir="rtl">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Drug Donation | خيرات الدواء</title>
            </head>

            <body>
                <div>
                    <h1>خيرات الدواء</h1>
                    <p>admin page</p>
                    <a href="../../auth/logout.php">تسجيل الخروج</a>
                    ';
        echo $_SESSION['name'];
        '
                </div>

            </body>

            </html>';
    } else {
        echo '<h1>You are not an authorised user</h1>';
        die();
    }
} else {
    echo '
    <!DOCTYPE html>
    <html lang="en" dir="ltr">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <!--load all styles -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <!-- Title -->
            <title>Hacking !!!</title>
        </head>

        <body>
            <nav class="navbar navbar-dark bg-danger">
                <div class="container">
                    <a class="navbar-brand">Danger User</a>
                </div>
            </nav>
            <div class="container mt-5 text-center">
                <img src="https://cdn1.iconfinder.com/data/icons/human-body-parts-1-3/100/a-03-512.png">
                <h1>You have bad idea ?!</h1>
                <p></p>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        </body>
    </html>
    ';
}
