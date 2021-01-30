<html>
    <head>
    <center>
        <h1>Updating Values in database</h1>
</center>
</head>
    <body>  
    <?php include "links.html";?>
        <center>
            <form method="post" action="">
        <h4>Enter the ID of the person:</h4> <input type="text" name="id" required><br><br>
        <h4>Enter the salary of the person you want to update:</h4> <input type="text" name="sal" required><br><br>  
        <input type="submit">
        </form>

        <?php
        
        if(isset($_REQUEST["id"]))
        {
        $mysqliObject = new mysqli("localhost", "root", "","phplearning");

        $id = $_REQUEST["id"];
        $salary = $_REQUEST["sal"];

        $mysqliObject->query("update employees set Salary= $salary where ID= $id");
       // echo $mysqliObject->affected_rows;
        if($mysqliObject->affected_rows == 0){
            echo "There's no data with $id to update";
        }else{
            echo "Data has been successfully updated";
        } 
}     
        
        ?>

</center>
</body>
</html>