sop1.html
--------------------------------------------
<!DOCTYPE html>
<html>
<head>
    <title>If Person is Eligible to Vote or Not</title>
</head>
<body>
    <h1 align="center">Person Eligible to Vote or Not</h1>
    <form method="post" action="sop1.php">
        Enter Your Age:
        <input type="text" name="age"><br><br>
        <input type="submit" name="submit" value="Check Eligibility">
    </form>
</body>
</html>
===============================================================
sop1.php
---------------------------------------------------
<?php
if (isset($_POST['submit'])) {
    // Sanitize and validate the age input
    $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);

    // Check if the input is numeric and not empty
    if (empty($age) || !is_numeric($age)) {
        echo "<br><br>Please enter a valid age.";
    } else {
        // Check if the age is greater than or equal to 18
        if ($age >= 18) {
            echo "<br><br>You are eligible to vote.";
        } else {
            echo "<br><br>You are not eligible to vote.";
        }
    }
}
?>
