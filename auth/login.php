<?php

include '../model/database/connect.php';

session_start();
$message = "";
if (count($_POST) > 0) {
    $con = mysqli_connect('127.0.0.1:3306', 'root', '', 'khms') or die('Unable To connect');
    $result = mysqli_query($con, "SELECT * FROM employees WHERE username='" . $_POST["user_name"] . "' and password = '" . $_POST["password"] . "'");
    $row  = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        if ($row['role'] == 'manager') {
            header("Location:../view/admin/admin.php");
        } else {
            header("Location:../view/employer/welcome.php");
        }
    } else {
        $message = "Invalid Username or Password!";
    }
}
?>


<a class="btn btn-primary" type="submit" href="../../index.php">
    <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
    back</a>
</div>
</nav>
<div class="container mt-5">
    <form name="frmUser" method="post" action="" align="center" style="border: 1px solid gray;width: 50%;margin: auto;padding: 15px;">
        <div class="message"><?php if ($message != "") {
                                    echo $message;
                                } ?></div>
        <h3 align="center">Enter Login Details</h3>
        <hr>
        Username:<br>
        <input type="text" name="user_name" class="form-control" style="width: 80%; margin: auto;" require>
        <br>
        Password:<br>
        <input type="password" name="password" class="form-control" style="width: 80%; margin: auto;" require>
        <br>
        <input class="btn btn-success" type="submit" name="submit" value="Submit" style="width: 40%;">
        <input class="btn btn-secondary" type="reset" name="reset" value="Reset" style="width: 40%;">
    </form>
</div>
</body>

</html>