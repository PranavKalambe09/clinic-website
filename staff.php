<?php include 'src/_version.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css?v=<?= $version ?>" />
    <link rel="stylesheet" href="css/staff.css?v=<?= $version ?>" />
    <link rel="stylesheet" href="index.js?v=<?= $version ?>" />
    <title>Clinic</title>
</head>

<body oncopy="return false" onpaste="return false">
    <section class="main">
        <?php include 'src/_nav.php' ?>
        <!-- <div class="container flex">
            <div class="doctor-1">

            </div>
            <div class="doctor-2">

            </div>
        </div> -->
        <div class="roww3">
            <div class="columnw3">
                <div class="cardw3">
                    <img src="imgs/team1.jpg" alt="Jane" style="width:100%">
                    <div class="containerw3">
                        <h2>Jane Doe</h2>
                        <p class="title">CEO & Founder</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                        <p>example@example.com</p>
                        <p><button class="buttonw3">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="columnw3">
                <div class="cardw3">
                    <img src="imgs/team2.jpg" alt="Mike" style="width:100%">
                    <div class="containerw3">
                        <h2>Mike Ross</h2>
                        <p class="title">Art Director</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                        <p>example@example.com</p>
                        <p><button class="buttonw3">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="columnw3">
                <div class="cardw3">
                    <img src="imgs/team3.jpg" alt="John" style="width:100%">
                    <div class="containerw3">
                        <h2>John Doe</h2>
                        <p class="title">Designer</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                        <p>example@example.com</p>
                        <p><button class="buttonw3">Contact</button></p>
                    </div>
                </div>
            </div>
        </div>
        <style>

            h2 {
                color: white;
                padding: 1rem;
                font-size: 1.2rem;
            }
           
            .columnw3 {
                float: left;
                width: 33.3%;
                margin-bottom: 16px;
                padding: 0 8px;
            }

            @media screen and (max-width: 650px) {
                .columnw3 {
                    width: 100%;
                    display: block;
                }
            }

            .containerw3 p{
                font-size: 1.2rem;
                color: white;
                padding: 1rem;
            }
            .cardw3 {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                backdrop-filter: blur(1rem);
            }

            .containerw3 {
                padding: 0 16px;
                text-align: center;
                
            }

            .containerw3::after,
            .roww3::after {
                content: "";
                clear: both;
                display: table;
            }

            .titlew3 {
                color: grey;
            }

            .buttonw3 {
                border: none;
                outline: 0;
                display: inline-block;
                padding: 8px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
            }

            .buttonw3:hover {
                background-color: #555;
            }
        </style>

        <?php include 'src/_footer.php' ?>
</body>

</html>