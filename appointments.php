<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['area']) && isset($_POST['doctor']) && isset($_POST['date']) && isset($_POST['time'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("appointments", $_POST['area'], $_POST['doctor'], $_POST['date'], $_POST['time'])) {
            echo "Appointment  Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>