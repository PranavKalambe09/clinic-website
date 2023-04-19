<?php
if (session_status() == PHP_SESSION_ACTIVE) {
  session_unset();
  session_destroy();
} else {
  $insert = false;
  $nameErr = $emailErr = $numberErr = "";
  $name = $email = $gender = $address = $number = "";
  include 'src/_config.php';
  if (!$conn) {
    die("Sorry we failed to connect: ". mysqli_connect_error());
  } else {

    if (isset($_POST['submit'])) {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function test_input($data)
        {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        if (empty($_POST["name"])) {
          $nameErr = '<div class="error">Name is required</div>';
        }
        if (empty($_POST["email"])) {
          $emailErr = '<div class="error">Email is required</div>';
        }
        if (empty($_POST["number"])) {
          $numberErr = '<div class="error">Number is required</div>';
        } else {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $gender = $_POST['gender'];
          $number = $_POST['number'];
          $address = $_POST['address'];
          $sql = "INSERT INTO `appointments` (`name`, `email`, `gender`, `number`, `address`, `date-time`) VALUES ('$name', '$email', '$gender','$number', '$address', current_timestamp());";
          $result = mysqli_query($conn, $sql);

          if ($result) {
            $insert = true;
          } else {
            echo "<p class='error'>ERROR CONNECTING";
          }
        }
      }
    }
    $conn->close();
  }
}

?>
<?php include 'src/_version.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel=" stylesheet" href="js/index.js?v=<?= $version ?>" />
  <link rel="stylesheet" href="css/style.css?v=<?= $version ?>">
  <title>Clinic</title>
</head>

<body oncopy="return false" onpaste="return false">
  <section class="main">
    <?php include 'src/_nav.php' ?>
    <div class="quote">
      <h2>Swasthasya Swasth-rakshanam Aturasya Vikar Prashaman ||</h2>
      <br />
      <h3>
        To mantain the health of the healthy and to cure those who are ill.
      </h3>
    </div>
    <div class="ayurveda">
      <div class="content">
        <h1>Why Ayurveda?</h1>
        <p>
          Ayurveda has the distinction of being the
          <span id="imp">“oldest medical system known to man and the oldest and most
            comprehensive spiritual teachings in the world”</span>. Ayurveda is based on the principle of
          maintaining a balance
          between the interrelated relationships within the body and mind. It
          helps the patient to understand the benefits of knowing their body
          and mind and to live in intimate relationship with nature
        </p>
      </div>
    </div>
    <div class="treatments">
      <h2>Treatments available for:</h2>
      <ul class="nobullets">
        <li>Hyper-Acidity</li>
        <li>Skin Allergy & Diseases</li>
        <li>Sinusitis</li>
        <li>Migraine</li>
        <li>Spondlyosis</li>
        <li>Arthritis</li>
        <li>Tinnitus</li>
        <li>Asthma</li>
        <li>Rheumatoid Arthritis</li>
        <li>Diabetes</li>
        <li>Paralysis</li>
        <li>Piles & Fissures</li>
      </ul>
    </div>
    <div id="appoint" class=" info">
      <h2>Opening Hours</h2>
      <div>Monday-Saturday Monday-Saturday</div>
      <div>11:00 AM - 02:00 PM 06:00 PM - 09:30 PM</div>
      <div>
        <form action="index.php" method="post" class="form" id="form">
          <?php if (!$insert) {
          }
          ?>
          <input type="text" name="name" id="name" placeholder="Enter your Name*" autocomplete="off" />

          <input type="email" name="email" id="email" placeholder="Enter your Email*" autocomplete="off" />

          <input type="text" name="gender" id="gender" placeholder="Enter your Gender" autocomplete="off" />

          <input type="tel" name="number" id="number" pattern="[0-9]{10}" placeholder=" Enter your Phone number*" autocomplete="off" />

          <textarea name="address" id="address" cols="30" rows="2" placeholder="Enter your Address" autocomplete="off"></textarea>

          <button type="submit" id="submit" name="submit">Book an Appointment</button>
        </form>
        <?php
        if ($insert) {
          echo "Successfully submitted";
        }
        if (!$insert) {
          echo $nameErr . $emailErr . $numberErr;
        }
        ?>

      </div>
    </div>
  </section>
  <?php include 'src/_footer.php' ?>

</body>

</html>