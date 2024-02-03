<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" || ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_REQUEST['submitted']))) {
        
        $data = ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_REQUEST['submitted'])) ? $_GET : $_POST;

        echo "<h2>Submitted Information:</h2>";
        echo "<ul>";
        foreach ($data as $key => $value) {
            echo "<li><strong>$key:</strong> $value</li>";
        }
        echo "</ul>";
    } else {
    ?>

        <h2>Student Information Form</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
            <input type="hidden" name="submitted" value="true">

            <label>First Name:
                <input type="text" name="first_name" required>
            </label><br>

            <label>Middle Name:
                <input type="text" name="middle_name">
            </label><br>

            <label>Last Name:
                <input type="text" name="last_name" required>
            </label><br>

            <label>Age:
                <input type="text" name="age" placeholder="Date of Birth/Age" required>
            </label><br>

            <label>Course and Year:
                <input type="text" name="course_and_year" required>
            </label><br>

            <label>Enrolled:
                <input type="radio" name="enrolled" value="Yes" required> Yes
                <input type="radio" name="enrolled" value="No" checked> No
            </label><br>

            <label>Subject:
                <input type="text" name="subject" required>
            </label><br>

            <label>Grade:
                <input type="number" step="0.1" name="grade" value="92.1" required>
            </label><br>

            <input type="submit" value="Submit">
        </form>

    <?php
    }
    ?>

</body>
</html>