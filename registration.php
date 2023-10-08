$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$userName = $_POST['userName'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

$query = "INSERT INTO registration (userName, firstName, lastName, email, password, confirmPassword) VALUES ('$userName', '$firstName', '$lastName', '$email', '$password', '$confirmPassword')";

$data = mysqli_query($con, $query);

if ($data) {
    // Data inserted successfully, you can redirect to another page or display a success message
    header("location: login.html");
} else {
    // Data insertion failed, display an error message and/or log the error
    echo "Data not sent: " . mysqli_error($con);
}

mysqli_close($con);
