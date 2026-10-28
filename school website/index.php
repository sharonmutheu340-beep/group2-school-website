
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenfield Academy - PHP Practical</title>
</head>
<body>

    <h1>Greenfield Academy</h1>
    <h2>PHP Practical Assessment</h2>

    <?php
    // TASK 1: PHP syntax
    // PHP code starts with <?php

    // TASK 2: Variables and echo
    $school = "Greenfield Academy";
    $student = "John";
    $marks = 65;

    echo "<h3>Student Information</h3>";
    echo "School Name: " . $school . "<br>";
    echo "Student Name: " . $student . "<br>";
    echo "Marks: " . $marks . "<br>";

    // TASK 3: Arithmetic operators
    $a = 20;
    $b = 10;

    echo "<h3>Arithmetic Operations</h3>";
    echo "Addition: " . ($a + $b) . "<br>";
    echo "Subtraction: " . ($a - $b) . "<br>";
    echo "Multiplication: " . ($a * $b) . "<br>";
    echo "Division: " . ($a / $b) . "<br>";

    // TASK 4: If...else statement
    echo "<h3>Student Performance</h3>";

    if ($marks >= 50) {
        echo "Congratulations! You have passed.";
    } else {
        echo "You have failed. Keep working hard.";
    }
    ?>

    <hr>

    <!-- TASK 5: HTML form using POST -->
    <h2>Student Registration Form</h2>

    <form method="POST" action="">
        <label for="student_name">Student Name:</label>
        <input
            type="text"
            id="student_name"
            name="student_name"
            required
        >

        <br><br>

        <label for="student_email">Email Address:</label>
        <input
            type="email"
            id="student_email"
            name="student_email"
            required
        >

        <br><br>

        <button type="submit">Register Student</button>
    </form>

    <?php
    // Process the submitted form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = trim($_POST["student_name"] ?? "");
        $email = trim($_POST["student_email"] ?? "");

        if ($name !== "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {

            echo "<h3>Registration Successful!</h3>";

            echo "Student Name: " .
                htmlspecialchars($name, ENT_QUOTES, "UTF-8") . "<br>";

            echo "Email Address: " .
                htmlspecialchars($email, ENT_QUOTES, "UTF-8");

        } else {
            echo "<p>Please enter a valid name and email address.</p>";
        }
    }
    ?>

</body>
</html>
