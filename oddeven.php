<!DOCTYPE html>
<html>
<body>
<h2>Odd or Even</h2>
<form method="get">
Enter a number:
<input type="text" name="num">
<input type="submit" value="check">
</form>

<?php
if(isset($_GET['num']))
{
        $n = $_GET['num'];
        if($n % 2 == 0)
        {
                echo "The number is Even";
        }
        else
        {
                echo "The number is Odd";
        }
}
?>
</body>
</html>
                                    
