<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Form Experiment">
    <meta name="keywords" content="Heading 1, Title, Body, PHP">
    <meta name="author" content="Olisaemeka Madu">
    <title>Booking Confirmation</title>
</head>

<body>

    <header><strong>Rohirrim Tour Booking Confirmation</strong></header>

<?php
    function clean_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $firstname = clean_input($_POST["firstname"]);
        $lastname = clean_input($_POST["lastname"]);
        $age = clean_input($_POST["age"]);

        $species = clean_input($_POST["species"]);
        $accom = isset($_POST["accom"]) ? $_POST["accom"] : [];

        $food = clean_input($_POST["food"]);
        $partysize = clean_input($_POST["partysize"]);
    }

    
    echo "<p>Welcome $firstname $lastname!</p>";
    echo "<p>You are now booked on the ". implode(" and ", $accom). "</p>";
    echo "<p>Species: $species</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Meal Preference: $food</p>";
    echo "<p>Number of travellers: $partysize</p>";
        



?>

</body>
</html>