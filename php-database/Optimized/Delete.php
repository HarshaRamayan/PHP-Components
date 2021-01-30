<html>
    <head>
    <center>
        <h1>Deleting Values from database</h1>
</center>
</head>
    <body>  
    <?php include "link.html";?>
        <center>
            <form method="post" action="">
        <h4>Enter the ID of the person:</h4> <input type="text" name="id" required><br><br>  
        <input type="submit">
        </form>
        </center>
<?php 
    
if(isset($_REQUEST["id"]))
{

    include "db.php";
    $createObject = new databasefunctions(); 
    $createObject->delete();
}
?>
</body>
</html>