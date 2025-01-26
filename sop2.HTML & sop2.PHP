<!DOCTYPE html>
<html>
<head>
    <title>Total Number of Vowels</title>
</head>
<body>
    <h1 align="center">String Functions</h1>
    <form method="post" action="sop2.php">
        Enter The String:
        <input type="text" name="str"><br><br>
        <input type="submit" name="submit" value="Count Vowels">
    </form>
</body>
</html>

----------------------------------------------------------------
<?php
if (isset($_POST['submit'])) {
    // Get the string from the user and convert it to lowercase
    $str = strtolower($_POST['str']);
    
    // Define the array of vowels
    $vowels = array('a', 'e', 'i', 'o', 'u');
    
    // Get the length of the string
    $len = strlen($str);
    
    // Initialize vowel count
    $num = 0;
    
    // Loop through each character in the string
    for ($i = 0; $i < $len; $i++) {
        // If the character is a vowel, increment the counter
        if (in_array($str[$i], $vowels)) {
            $num++;
        }
    }
    
    // Output the number of vowels
    echo "Number of Vowels: $num";
}
?>
