<?php
// Check if form data is submitted
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['date'])) {

    // Database connection
    $con = mysqli_connect('localhost', 'root', '', 'database');

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the POST data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $date = $_POST['date'];

    // Prepare an SQL statement to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO appointment (name, email, number, date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $number, $date);

    // Execute the query
    if ($stmt->execute()) {
        echo "Data successfully stored!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    mysqli_close($con);

    // Redirect back to the home page (index.html) after submitting the form
    header("Location: index.html");
    exit();
} else {
    echo "Please fill in all fields.";
}
?>