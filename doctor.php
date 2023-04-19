<?php
include 'src/_version.php';

$login = false;
$showError = false;
$passerr = false;
$usernameErr = $passErr = $cpassErr = "";
include 'src/_config.php';

if (session_status() == PHP_SESSION_ACTIVE) {
    if ($_SESSION['loggedin']) {
        header("Location: dashboard.php");
    }
}

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    if (isset($_POST['submit'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['username'])) {
                $usernameErr = '<div class="error">Name is required</div>';
            }
            if (empty($_POST['password'])) {
                $passwordErr = '<div class="error">Password is required</div>';
            }
            if (empty($_POST['cpassword'])) {
                $cpasswordErr = '<div class="error">Please enter your password again</div>';
            }
            $username = $_POST['username'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];

            $sql = "Select * from admin where username='$username'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            //     while($sam = mysqli_fetch_assoc($result)){
            //     echo $sam['username'].$sam['password'];
            // }

            if ($num == 1) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($password == $cpassword) {
                        if ($password == $row['password']) {
                            header("Location: dashboard.php");
                            $login = true;
                            session_start();
                            $_SESSION['loggedin'] = true;
                            $_SESSION['username'] = $username;
                        } else {
                            $showError = '<div class="error"> Invalid Credentials! </div>';
                        }
                    } else {
                        $passerr = true;
                    }
                }
            } else {
                $showError = '<div class="error"> Invalid Credentials! </div>';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css?v=<?= $version ?>" />
    <link rel="stylesheet" href="index.js?v=<?= $version ?>" />
    <link rel="stylesheet" href="css/doctor.css?v=<?= $version ?>">
    <title>Clinic</title>
</head>

<body oncopy="return false" onpaste="return false">
    <section class="main">

        <?php include 'src/_nav.php'; ?>

        <div class="container dr-login">
            <?php
            if ($login) {
                echo 'Successfully Logged In.';
            }

            if ($showError) {
                echo $showError;
            }
            ?>
            <form action='doctor.php' method='post'>
                <div class="username flex">

                    <label for="uname">
                        <p>Username</p>
                    </label>
                    <input type="text" placeholder="Enter Username" name="username" id="username" autocomplete="off">
                </div>

                <div class="password flex">

                    <label for="psw">
                        <p>Password</p>
                    </label>
                    <input type="password" placeholder="Enter Password" name="password" id="password">
                </div>

                <div class="cpassword flex">

                    <label for="cpsw">
                        <p> Confirm Password</p>
                    </label>
                    <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword"><br>
                </div>

                <div class="butsub">
                    <button type="submit" name="submit" id="submit">Login</button>
                </div>
                <?php
                if (!$login) {
                    echo $usernameErr . $passErr . $cpassErr;
                }
                if ($passerr) {
                    echo " <div class='error'>Passwords do not match!</div>";
                }
                ?>
            </form>
        </div>
    </section>

    <?php include 'src/_footer.php'; ?>
</body>

</html>