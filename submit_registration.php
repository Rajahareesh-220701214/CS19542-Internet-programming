<?php
    include 'db.php'; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $course = $_POST['course'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        
        $sql = "INSERT INTO registrations (course, name, email, phone) VALUES ('$course', '$name', '$email', '$phone')";

        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
