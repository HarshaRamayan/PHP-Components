<html>
    <head>
        <center>
        <h1>Employee Details</h1>
    </center>
    </head>
    <body>
        <center>
        <form method= "post" action= "">
        Enter the ID.NO of the employee: <input type="text" name="empname"><br><br>
        <input type="submit">
    </form>
        <?php

    // // error_reporting(0);
    // $mysqliObject = new mysqli("localhost", "root", "", "phplearning");
    // // connect_errno and connect_error properties are present in mysqli class
    // // to access any class properties we use object->propertyname
    // // echo $mysqliObject->connect_errno ."<br>" ;
    
    // // echo $mysqliObject->connect_error;
    
    // function getEmployeeName($para1){
        
    //     // to access global variables use global keyword in the function
    //     global $mysqliObject;
    
    //     //query() returns resultset object
    //     $resultsetObject = $mysqliObject->query("select Name from employees where ID = $para1");
    //     if($resultsetObject->num_rows == 0){
    //         echo "Your trying to access unknown data! Plese try again";
    //     }else{
    
    //         $fetchData = $resultsetObject->fetch_assoc();
    
    //         echo $fetchData["Name"];
    //     }
        
        
    // }
    
    // getEmployeeName(3);  
    
    if(isset($_REQUEST['empname']))
    {
    
    $mysqliObject = new mysqli("localhost", "root", "", "phplearning");
    
    $resultsetObject = $mysqliObject->query("select Name from employees where name = '".$_REQUEST["empname"]."'" );
    
   
 
    global $resultsetObject;
    
        if($resultsetObject->num_rows == 0){
    
            echo "please access the present data";
        }else{
            $fetchData1 = $resultsetObject->fetch_assoc();
    
            echo $fetchData1["Name"];
        }
    
    }
    
    
    ?>
    </center>

    

      
    </body>
</html>