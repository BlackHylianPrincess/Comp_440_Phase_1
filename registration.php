<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "signup";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$userName = $_POST['username'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

# TODO Detect duplicate username and email.

# Ensure password and confirm password match.
if ($password != $confirmPassword) {
    # TODO show error on page and make user try again.
}

$query = "INSERT INTO users (username, firstName, lastName, email, password) VALUES ('$username', '$firstName', '$lastName', '$email', '$password')";

$data = mysqli_query($con, $query);

if ($data) {
    // Data inserted successfully, you can redirect to another page or display a success message
    header("location: login.html");
} else {
    // Data insertion failed, display an error message and/or log the error
    echo "Data not sent: " . mysqli_error($con);
}

mysqli_close($con);

?>