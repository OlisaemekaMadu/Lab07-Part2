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

    <header>Rohirrim Tour Booking Confirmation</header>

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
        // $lastname = clean_input($_POST["firstname"]);
        // $age = clean_input($_POST["firstname"]);

        // $species = clean_input($_POST["firstname"]);
        // $accom = isset($_POST["firstname"]) ? ;
        // $4day = clean_input($_POST["firstname"]);

        // $10day = clean_input($_POST["firstname"]);
        // $food = clean_input($_POST["firstname"]);
        // $bookday = clean_input($_POST["firstname"]);
        // $bookday = clean_input($_POST["firstname"]);
    }

    echo "<p><strong>Name: </strong> $firstname</p>";



?>

</body>
</html>