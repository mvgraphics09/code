<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form method="POST">
            Enter Salary:
            <input type="number" name="salary">
            <input type="submit">
        </form>
</body>
</html>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["salary"])&& $_POST["salary"] > 0)
        {
            $basic_salary = $_POST["salary"];
            $da = (50 * $basic_salary) / 100;
            $hra = (10 * $basic_salary) / 100;
            $medical = (4 * $basic_salary) / 100;
            $gross_salary = $da + $hra + $medical + $basic_salary ;
            $in = (7 * $gross_salary)/100;
            $pf = (5 * $gross_salary)/100;
            $deduction = $in + $pf;
            $net_salary = $gross_salary - $deduction ; 
            echo"Enter Salary is ".$net_salary;
        }
		else
		{
			echo " please enter value";
		}
    }
?>