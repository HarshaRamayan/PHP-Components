<html>
    <head>
       

    <center>
        <h1>Inserting Values to database</h1>
</center>
</head>
    <body>
         <?php include "links.html";?>

        <center>
            <form method="post" action="">
        <h4>Enter the name you want to insert:</h4> <input type="text" name="name" required><br><br>
        <h4>Enter the job of the person you want to insert:</h4> <input type="text" name="job" required><br><br>
        <h4>Enter the salary of the person you want to insert:</h4> <input type="text" name="salary" required><br><br>  
        <input type="submit">
        </form>

<?php

include "./Optimized/db.php";
if(isset($_REQUEST["job"])){
    // $mysqliObject = new mysqli("localhost", "root", "", "phplearning");
    // $name = $_REQUEST['name'];
    // $job = $_REQUEST['job'];
    // $salary = $_REQUEST['salary'];
    // $resultsetObject = $mysqliObject->query("insert into employees(Name, Job, Salary) values('$name','$job','$salary')");
    // echo $mysqliObject->connect_error;
   //echo "insert into employees(Name, Job, Salary) values(\"".$_REQUEST["name"]."\""."\"".$_REQUEST["job"]."\"".$_REQUEST["salary"]."\")";        
}

?>
</center>



</body>
</html>