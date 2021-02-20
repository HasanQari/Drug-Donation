<?php
session_start();

if ($_SESSION) {
    if ($_SESSION['name'] == "employer") {
        echo '<!DOCTYPE html>
        <html lang="ar" dir="rtl">
        
        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
            <title> Employers  | خيرات الدواء</title>
            <meta content="" name="description">
            <meta content="" name="keywords">
        
            <!-- Favicons -->
            <link href="../../resource/img/khme-logo.jpeg" rel="icon">
            <link href="../../resource/img/khme-logo.jpeg" rel="apple-touch-icon">
        
            <!-- Google Fonts -->
            <link
                href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
                rel="stylesheet">
        
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
                integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        
            <!-- Vendor CSS Files -->
            <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
            <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
            <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
            <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
            <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
            <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        
            <!-- Template Main CSS File -->
        
        
            <style>
                /* Fonts */
                @font-face {
                    font-family: GESbold;
                    src: url("../../resource/font/Bold.otf") format("opentype");
                }
        
                @font-face {
                    font-family: GESmedium;
                    src: url("../../resource/font/Medium.otf") format("opentype");
                }
        
                @font-face {
                    font-family: GESlight;
                    src: url("../../resource/font/Light.otf") format("opentype");
                }
            </style>
        </head>
        
        <body>
        
            <nav class="navbar navbar-dark bg-primary pt-2 pb-2" style="padding: 10px 30px 10px 30px;">
                <div class="container-fluid">
                    <a class="navbar-brand" style="font-size:20px">أهلا ';
                        echo $_SESSION['name'];
                        echo '</a>
                    <div class="d-flex">
                        <a href="" 
                            style="text-align:center;color:white;font-weight:bold; text-decoration: none; margin: auto 20px;">التواصل مع الإدارة</a>
                        <a href="../../auth/logout.php" class="btn btn-success"
                            style="text-align:center;color:white;font-weight:bold">تسجيل الخروج</a>
                    </div>
                </div>
            </nav>
            <div class="container mt-5 mb-5">
                <main id="main">
                    <section id="goal" class="about">
                        <div class="container" data-aos="">
                            <div class="section-title">
                                <h2 style="font-family: GESbold;">لوحة التحكم الخاصة بالموظفين</h2>
                                <p style="font-family: GESmedium;font-size: 20px;color: cornflowerblue;">
                                    الاشعارات: <span> The Notification will showing here ! </span>
                                </p>
                            </div>
                            <hr><br>
                            <div class="section-body">
                                <div>
                                    <h6 style="font-family: GESbold;">جدول التبرعات:</h6>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">م</th>
                                                <th scope="col">الاسم</th>
                                                <th scope="col">شركة أم فرد</th>
                                                <th scope="col">الجوال</th>
                                                <th scope="col">الايميل</th>
                                                <th scope="col">العنوان</th>
                                                <th scope="col">اسم الدواء</th>
                                                <th scope="col">الكمية</th>
                                                <th scope="col">تاريخ الصلاحية</th>
                                                <th scope="col">طريقة الاستلام</th>
                                                <th scope="col">حالة الطلب</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option value="1" selected>open</option>
                                                        <option value="2">processing</option>
                                                        <option value="3">closed</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option value="1" selected>open</option>
                                                        <option value="2">processing</option>
                                                        <option value="3">closed</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option value="1" selected>open</option>
                                                        <option value="2">processing</option>
                                                        <option value="3">closed</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <hr><br>
                                <div>
                                    <h6 style="font-family: GESbold;">جدول الطلبات:</h6>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">م</th>
                                                <th scope="col">الاسم</th>
                                                <th scope="col">الهوية/الاقامة</th>
                                                <th scope="col">الجوال</th>
                                                <th scope="col">اسم الجمعية الخيرية التابع لها</th>
                                                <th scope="col">العنوان</th>
                                                <th scope="col">الوصفة الطبية</th>
                                                <th scope="col">حالة الطلب</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option value="1" selected>open</option>
                                                        <option value="2">processing</option>
                                                        <option value="3">closed</option>
                                                    </select>
                                                </td>
        
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option value="1" selected>open</option>
                                                        <option value="2">processing</option>
                                                        <option value="3">closed</option>
                                                    </select>
                                                </td>
        
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>X</td>
                                                <td>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option value="1" selected>open</option>
                                                        <option value="2">processing</option>
                                                        <option value="3">closed</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        
            <!-- ======= Footer ======= -->
            <footer id="footer" style="border-top: 2px solid cornflowerblue;border-width: 20px;">
                <br>
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
        
                            <div class="col-lg-3 col-md-6 footer-contact text-center">
                                <img src="../../resource/img/khme-logo.jpeg" alt="" class="img-fluid">
                                <h3>Drug Donation</h3>
                                <div class="social-links text-md-right pt-3">
                                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
        
                            <div class="col-lg-2 col-md-6 footer-links">
                                <h4 style="font-family: GESmedium;">روابط مفيدة</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="../../index.html"
                                            style="font-family: GESlight;">الرئيسية</a>
                                    </li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="https://www.socialthon.net/"
                                            style="font-family: GESlight;">السوشلثون</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="view/general/aboutteam.html"
                                            style="font-family: GESlight;">فريق السوشلثون</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="view/general/policyScreen.html"
                                            style="font-family: GESlight;">الشروط والأحكام</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="auth/login.php"
                                            style="font-family: GESlight;">دخول الموظفين</a></li>
                                </ul>
                            </div>
        
                            <div class="col-lg-4 col-md-6 footer-newsletter">
                                <h4 style="font-family: GESlight;">جميع الحقوق محفوظة</h4>
                                <br><br>
                                <div class="copyright" dir="ltr">
                                    &copy; Copyright <strong><span>Drug Donation</span></strong>. All Rights Reserved
                                </div>
                                <div class="credits" dir="ltr">
                                    Developed by <a href="https://qarinet01.github.io/MySite/">Qari.Net</a>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </footer><!-- End Footer -->
        
            <!-- <div id="preloader"></div> -->
            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>
        
            <!-- Vendor JS Files -->
            <script src="../../assets/vendor/aos/aos.js"></script>
            <script src="../..assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="../..assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="../..assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="../..assets/vendor/php-email-form/validate.js"></script>
            <script src="../..assets/vendor/purecounter/purecounter.js"></script>
            <script src="../..assets/vendor/swiper/swiper-bundle.min.js"></script>
        
            <!-- Template Main JS File -->
            <script src="../..assets/js/main.js"></script>
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
