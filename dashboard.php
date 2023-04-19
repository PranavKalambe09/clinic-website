<?php include 'src/_version.php';

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: doctor.php");
    exit;
}
else{

    include 'src/_config.php';
    if(isset($_GET['delete'])){
        $sno = $_GET['delete'];
        $sql = "DELETE FROM `appointments` WHERE `sno` = $sno";
        $result = mysqli_query($conn, $sql);
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
    <link rel="stylesheet" href="css/dashboard.css?v=<?= $version ?>" />
    <link rel="stylesheet" href="index.js?v=<?= $version ?>" />

    <title>Welcome - <?php echo $_SESSION['username'] ?></title>
</head>

<body oncopy="return false" onpaste="return false">
    <section class="main">
        <?php include 'src/_nav.php' ?>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date-Time</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'src/_config.php';
                    $sql = "SELECT * FROM appointments";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                        <th scope="row">' . $row["sno"] . '</th>
                        <td>' . $row["name"] . '</td>
                        <td>' . $row["email"] . '</td>
                        <td>' . $row["gender"] . '</td>
                        <td>' . $row["number"] . '</td>
                        <td>' . $row["address"] . '</td>
                        <td>' . $row["date-time"] . '</td>
                        <td><button class="delete" id=d'.$row['sno'].'>Delete</button></td>
                        </tr>';
                    }
                    
                    ?>
                </tbody>
            </table>
        </div><script>

            deletes = document.getElementsByClassName('delete');
            Array.from(deletes).forEach((element) => {
                element.addEventListener("click", (e) => {
                    console.log("edit", );
                    sno = e.target.id.substring(1,);

                    if (confirm("Are you sure you want to delete this note!")) {
                    console.log("yes");
                    window.location = `dashboard.php?delete=${sno}`;
                }
                else{
                    console.log("no");
                }
            })
            
        });
          </script>
            <div class="bt">

                <a class="hd-button" href="logout.php">Logout</a>
            </div>
        <?php include 'src/_footer.php' ?>
    </body>
</html>