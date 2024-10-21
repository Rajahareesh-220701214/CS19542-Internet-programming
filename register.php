<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $course = $_POST['course'];
        if (empty($course)) {
            
            header('Location: select_course.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        
        <form action="submit_registration.php" method="post">
            <input type="hidden" name="course" value="<?php echo $course; ?>">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <button type="submit">Submit Registration</button>
        </form>
    </div>
</body>
</html>
