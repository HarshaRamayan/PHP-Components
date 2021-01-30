<html>
    <head>
    <center>
        <h1>deleting Values in database</h1>
</center>
</head>
    <body>  
    <?php include "links.html";?>
        <center>
            <form method="post" action="">
        <h4>Enter the ID of the person:</h4> <input type="text" name="id" required><br><br>  
        <input type="submit">
        </form>

        <?php
        
        if(isset($_REQUEST["id"]))
        {
        $mysqliObject = new mysqli("localhost", "root", "","phplearning");

        $id = $_REQUEST["id"];
        $mysqliObject->query("delete from employees where ID= $id");
        //echo $mysqliObject->affected_rows;
        if($mysqliObject->affected_rows == 0){
        echo "There's no data with id= $id";    
        }else{
        echo "The data of the person with id= $id has been successfully deleted";
        }
        }
        ?>

</center>
</body>
</html>