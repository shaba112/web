<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>

<h2>Student Details Form</h2>

<form method="post" action="">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email ID:
    <input type="email" name="email" required>
    <br><br>

    Address:
    <textarea name="address" required></textarea>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <br><br>

    Date of Birth:
    <input type="date" name="dob" required>
    <br><br>

    Phone Number:
    <input type="text" name="phone">
    <br><br>

    Course:
    <input type="text" name="course">
    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<?php

if(isset($_REQUEST['submit']))
{
    echo "<h2>Student Details</h2>";

    echo "Name: " . htmlspecialchars($_REQUEST['name']) . "<br><br>";

    echo "Email ID: " . htmlspecialchars($_REQUEST['email']) . "<br><br>";

    echo "Address: " . htmlspecialchars($_REQUEST['address']) . "<br><br>";

    echo "Gender: " . htmlspecialchars($_REQUEST['gender'] ?? '') . "<br><br>";

    echo "Date of Birth: " . htmlspecialchars($_REQUEST['dob']) . "<br><br>";

    echo "Phone Number: " . htmlspecialchars($_REQUEST['phone']) . "<br><br>";

    echo "Course: " . htmlspecialchars($_REQUEST['course']) . "<br><br>";
}

?>

</body>
</html>

~                             
