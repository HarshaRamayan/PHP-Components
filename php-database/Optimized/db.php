<?php

$mysqliObject = new mysqli("localhost", "root", "", "phplearning");

class databasefunctions{    
        
    function create(){ 
        global $mysqliObject;
        $name = $_REQUEST["name"];
        $job = $_REQUEST["job"];
        $salary = $_REQUEST["salary"];
        $mysqliObject->query("Insert into employees(Name, Job, Salary) values('$name', '$job',$salary)");
        if($mysqliObject->affected_rows){
            echo "The row has been successfully inserted";
        }else{
            echo "No rows inserted";
        }
        
    }

    function update(){
        global $mysqliObject;
        $id = $_REQUEST["id"];
        $salary = $_REQUEST["salary"];    
        echo $id;
         $mysqliObject->query("update employees set Salary= $salary where ID= $id");
       
    }
    function delete() {
        global $mysqliObject;
        $id = $_REQUEST["id"];
        $resultsetObject = $mysqliObject->query("Delete from employees where ID = $id");
      

    }
    function read(){
        
        global $mysqliObject;
        $resultsetObject = $mysqliObject->query("Select * from employees");
        echo "<center>";
         echo "<table>";
        echo "<th>". "ID". "</th>". "<th>". "Name". "</th>". "<th>". "Job". "</th>". "<th>". "Salary". "</th>" ;
        
        while($dataStore = $resultsetObject->fetch_assoc()){

        echo "<tr>"."<td>".$dataStore["ID"]."</td>"."<td>".$dataStore["Name"]."</td>". "<td>".$dataStore["Job"]."</td>".
        "<td>".$dataStore["Salary"]."</td>"."</tr>"."<br>";}
        echo "</table>";
        echo "</center>";

    }
   
}

?>

<html>
<body>
<style>
table, td, th
{
    border: 1px solid black;
 }
table{
    border-collapse: collapse;

}
td{
    padding: 10px;
    
}
</style>

<html>
<body>

