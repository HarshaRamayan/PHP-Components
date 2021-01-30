<html>
    <head>
    <center>
        <h1>Updating Values in database</h1>
</center>
</head>
    <body>  
    <?php include "link.html";?>
        <center>
            <form method="post" action="">
        <h4>Enter the ID of the person:</h4> <input type="text" name="id" required><br><br>
        <h4>Enter the salary of the person you want to update:</h4> <input type="text" name="salary" required><br><br>  
        <input type="submit">
        </form>

</center>

<?php

if(isset($_REQUEST["id"]))
{

    include "db.php";
    $createObject = new databasefunctions(); 
    $createObject->update();
}

?>
</body>
</html>