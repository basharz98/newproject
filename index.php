<?php
$conn = mysqli_connect('localhost', 'root', '', 'newproject');

if (!$conn) {
    die('Error: ' . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $FirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);


    $sql = "INSERT INTO students (FirstName, Email, Gender)
            VALUES ('$FirstName', '$Email', '$Gender')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h1>Student Registration Form</h1>
        <div>
            <label for="FirstName">FirstName</label>
            <input type="text" id="FirstName" name="FirstName">
        </div>
        <div>
            <label for="Email">Email</label>
            <input type="text" id="Email" name="Email">
        </div>
        <div>
            <label for="Gender">Gender</label>
            <div>
                <label for="Male"><input type="radio" name="Gender" value="m" id="Male">Male</label>
                <label for="Female"><input type="radio" name="Gender" value="f" id="Female">Female</label>
            </div>    
        </div>
        <div>
            <input type="submit" name="submit" value="Send">
        </div>
    </form>
</body>
</html>
