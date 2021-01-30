<html>
   <head>
<center>
        <h1> ICT for small business time table</h1>
</center>
</head>
<body>
   <center>
    <form method="post" action="">
  <label>  Please select the day you want the schedule: </label>
  <select name="opt" value="Days">
    <option value="monday">Monday</option>
    <option value="tuesday">Tuesday</option>
    <option value="wednesday">Wednesday</option>
    <option value="thursday">Thursday</option>
    <option value="friday">Friday</option>
    <option value="saturday">Saturday</option>
    <option value="sunday">Sunday</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>


<?php

if(isset($_REQUEST["opt"]) == true){
$mysqliObject = new mysqli("localhost", "root", "", "phplearning");
$resultsetObject= $mysqliObject->query("select * from timeschedule where Day = '".$_REQUEST["opt"]."'");
$fetchData = $resultsetObject->fetch_assoc();

echo "<center>";
echo "<table>";
echo "<tr>"."<th>Day</th>"."<th>Subject</th>"."<th>Timings</th>"."</tr>";
if($_REQUEST["opt"] == "monday"){ 
  echo "<tr>"."<td>".$fetchData["Day"]."</td>"."<td>".
  $fetchData["Subject"]."</td>"."<td>".$fetchData["Timings"]."</td>". "</tr>";
  $fetchData = $resultsetObject->fetch_assoc();
  echo "<tr>"."<td>".$fetchData["Day"]."</td>"."<td>".
  $fetchData["Subject"]."</td>"."<td>".$fetchData["Timings"]."</td>". "</tr>";
}else{
  echo "<tr>"."<td>".$fetchData["Day"]."</td>"."<td>".
  $fetchData["Subject"]."</td>"."<td>".$fetchData["Timings"]."</td>". "</tr>";

}
echo "</table>";
echo "</center>";
}

// //global $resultsetObject;




// if($_REQUEST["opt"] == "Monday"){
//   echo "<center>";
//   echo "<table>";
//   echo "<tr>"."<th>Day</th>"."<th>Subject</th>"."<th>Timings</th>"."</tr>";
//   echo "<tr>"."<td>".$fetchData["Day"]."</td>"."<td>".$fetchData["Subject"]."</td>"."<td>".$fetchData["Timings"]."</td>". "</tr>";
//   echo "</table>";
//   echo "</center>";
// }elseif($_REQUEST["opt"] == "Tuesday"){
//   echo "<center>";
//   echo "<table>";
//   echo "<tr>"."<th>Day</th>"."<th>Subject</th>"."<th>Timings</th>"."</tr>";
//   echo "<tr>"."<td>".$fetchData["Day"]."</td>"."<td>".$fetchData["Subject"]."</td>"."<td>".$fetchData["Timings"]."</td>". "</tr>";
//   echo "</table>";
//   echo "</center>";
// }elseif($_REQUEST["opt"] == "Wednesday"){
//   echo "<center>";
//   echo "<table>";
//   echo "<tr>"."<th>Day</th>"."<th>Subject</th>"."<th>Timings</th>"."</tr>";
//   echo "<tr>"."<td>".$fetchData["Day"]."</td>"."<td>".$fetchData["Subject"]."</td>"."<td>".$fetchData["Timings"]."</td>". "</tr>";
//   echo "</table>";
//   echo "</center>";
// }
// elseif($_REQUEST["opt"] == "Thursday"){
//   echo "<center>";
//   echo "<table>";
//   echo "<tr>"."<th>Day</th>"."<th>Subject</th>"."<th>Timings</th>"."</tr>";
//   echo "<tr>"."<td>".$fetchData["Day"]."</td>"."<td>".$fetchData["Subject"]."</td>"."<td>".$fetchData["Timings"]."</td>". "</tr>";
//   echo "</table>";
//   echo "</center>";
// }elseif($_REQUEST["opt"] == "Friday"){
//   echo "<center>";
//   echo "<table>";
//   echo "<tr>"."<th>Day</th>"."<th>Subject</th>"."<th>Timings</th>"."</tr>";
//   echo "<tr>"."<td>".$fetchData["Day"]."</td>"."<td>".$fetchData["Subject"]."</td>"."<td>".$fetchData["Timings"]."</td>". "</tr>";
//   echo "</table>";
//   echo "</center>";
// }elseif($_REQUEST["opt"] == "Saturday" || $_REQUEST["opt"] == "Sunday"){
//   echo "<center>";
//   echo "<table>";
//   echo "<tr>"."<th>Day</th>"."<th>Subject</th>"."<th>Timings</th>"."</tr>";
//   echo "<tr>"."<td>".$fetchData["Day"]."</td>"."<td>".$fetchData["Subject"]."</td>"."<td>".$fetchData["Timings"]."</td>". "</tr>";
//   echo "</table>";
//   echo "</center>";
// }


// if($resultsetObject= $mysqliObject->query("select * from timeschedule where Day = '".$_REQUEST["opt"]."'"))
// {
//   $fetchData = $resultsetObject->fetch_assoc();
//   echo "<center>";
//   echo "<table>";
//   echo "<tr>"."<th>Day</th>"."<th>Subject</th>"."<th>Timings</th>"."</tr>";
//   echo "<tr>"."<td>".$fetchData["Day"]."</td>"."<td>".$fetchData["Subject"]."</td>"."<td>".$fetchData["Timings"]."</td>". "</tr>";
//   echo "</table>";
//   echo "</center>";
  
// }


?>

</center>

<style>

  table, td, th{
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
  }
  </style>

</body>
</html>




