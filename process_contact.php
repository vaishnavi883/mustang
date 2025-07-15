<?php
// Connect to database
include '../mustang/admin-pannal/connection.php'; // update with your DB credentials file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Default status
    $status = 'Pending';

    // Insert into database
    $sql = "INSERT INTO Enquiry (name, email, subject, message, status)
            VALUES ('$name', '$email', '$subject', '$message', '$status')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Enquiry submitted successfully!');
            window.location.href = 'index.html'; // change if needed
        </script>";
    } else {
        echo "<script>
            alert('Error submitting enquiry. Try again.');
            window.history.back();
        </script>";
    }
} else {
    echo "Invalid Request Method";
}
?>
