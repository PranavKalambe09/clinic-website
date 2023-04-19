<?php include 'src/_version.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css?v=<?=$version ?>" />
    <link rel="stylesheet" href="css/misc.css?v=<?=$version ?>" />
    <link rel="stylesheet" href="index.js?v=<?=$version ?>" />
    <title>Clinic</title>
</head>

<body oncopy="return false" onpaste="return false">
    <section class="main">
    <?php include 'src/_nav.php' ?>
    <div class="container">
        <div class="content">
        Healthcare services have seen a strong paradigm shift in recent years globally. At the clinical level, personalized care to individuals is usually provided based on medical history, examination, vital signs, and evidence. However, in the recent times, the focus on these traditional tenets is being taken over by the aspects of learning, metrics, and quality improvement. The last decade has seen a global rise in adoption of Electronic Health Records (EHRs) [2-7], catalyzing the increase in the complexity and volume of the health data generated in the process. Apart from the EHR-sourced ordinary patient data, due to the change in treatment paradigms and focus on lifestyle and comprehensive healthcare, new varieties of health-data about medical conditions, lifestyle, underlying genetics, medications, and treatment approaches also showed a paramount rise. Despite the complex nature of new-generation health data, human cognition to analyze and make sense of these humongous data is finite.
        </div>

        <div class="content">
        Healthcare services in India have evolved with the implementation of three major technologies to better serve the population on a global level. This has helped the medical industry in reinforcing better communication, improving patient monitoring, and proffering more such medical support opportunities.

        <ul>
            <li>eHospital Management Software
        Government hospitals have implemented this management software to give their staff the information they need to treat their patients. This software package does the following:
            <ul>
                <li>Stores patient registration and records</li>
                <li>Handles billing and supplier accounts</li>
                <li>Keeps lab and imagery results on file</li>
                <li>Manages inventory counts accurate on supplies, pharmaceutical, and blood units</li>
                <li>Tracks operational costs and production</li>
        </ul>  
       </li>
            <li>Tele-ICU Service
        This ICU management software is designed to assist the medical staff by observing their critical patients. It can communicate automated reminders to keep medications dispensed correctly, allow doctors to remotely monitor their patients, and other communication benefits. Many private sector hospitals have implemented this program in their main and satellite locations.</li>
            <li>Geospatial Intelligence
        Getting to patients and transporting them to the closest health care facility is essential. This GPS-based software coordinates the best routes for transportation services from the patient’s location to the medical facility. It can also monitor patient volumes in all locations. For reporting purposes, this program can also track hospital bed turnover to determine average hospital stays.</li>
        </ul>
        
        
        
        </div>
    </div>
    <?php include 'src/_footer.php' ?>
</body>
</html>