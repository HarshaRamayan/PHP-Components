<?php

include "links.html";  
$mysqliobject = new mysqli("localhost", "root", "", "phplearning");


if($mysqliobject){

    $dataStore = $mysqliobject->query("select * from employees");
    echo "<center>";
    echo "<table>";
    echo "<th>". "ID". "</th>". "<th>". "Name". "</th>". "<th>". "Job". "</th>". "<th>". "Salary". "</th>" ;
    while($fetchdata = $dataStore->fetch_assoc())
    {

        echo "<tr>"."<td>".$fetchdata["ID"]."</td>"."<td>".$fetchdata["Name"]."</td>". "<td>".$fetchdata["Job"]."</td>".
        "<td>".$fetchdata["Salary"]."</td>"."</tr>"."<br>";

    }
    echo "</table>";
    echo "</center>";

}else{
    echo "not connected to database";
}



// class mysqli
// {
//     function __construct(1,2,3,4)
//     {
//             //code for db connecting
//     }
//     function query($querystring)
//     {
//         //it will to to phpmyadmin and will execute thr query and get back data
//         $ResultSetObj= new ResultSet();
//         return $ResultSetObj;
//     }

//     class ResultSet
//     {
//         function fetch_assoc()
//         {
//             $dummyarray = ["ID"=>1,"Name"=>"Sudheer","Job"=>"Software","Salary"=>1000];
//             return $dummyarray;
//         }
//     }
// }
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