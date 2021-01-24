<?php
 $courseObject = new weekSchedule("harsha");

 class weekSchedule{
    public $subjectArray = array ("Capstone Project", "Project Management", "E-commerce-II", "Web-Development-III", "ASP.Net");
    public $timeArray = array ("12:00 - 2:20", "8:30 - 11:30", "6:30 - 9:30","8:30 - 11:30", "8:30 - 11:30");

    function __construct($name)
    {
        echo "<i>".$name."</i>";
        echo "<center>". "Schedule for"." ". $_REQUEST["opt"]. "</center>";
        echo "<table>"; 
        echo "<tr>"."<th>"."Subject"."</th>"."<th>"."Schedule"."</th>"."<tr>";

       
        if($_REQUEST["opt"] == "monday"){
           
            echo "<tr>"."<td>".$this->subjectArray[3]."</td>"."<td>".$this->timeArray[3]. "</td>"."</tr>";
            echo "<tr>"."<td>".$this->subjectArray[0]."</td>"."<td>".$this->timeArray[0]. "</td>"."</tr>";
            
        }elseif($_REQUEST["opt"] == "tuesday"){
            
            echo "<tr>"."<td>".$this->subjectArray[4]."</td>"."<td>".$this->timeArray[1]. "</td>"."</tr>";
            
        }
        elseif($_REQUEST["opt"] == "wednesday"){
            echo "<tr>"."<td>".$this->subjectArray[2]."</td>"."<td>".$this->timeArray[2]. "</td>"."</tr>";
            
        }elseif($_REQUEST["opt"] == "thursday"){
            echo "<tr>"."<td>".$this->subjectArray[1]."</td>"."<td>".$this->timeArray[1]. "</td>"."</tr>";
            
        }
        elseif($_REQUEST["opt"] == "friday"){
            
            echo "<tr>"."<td>".$this->subjectArray[0]."</td>"."<td>".$this->timeArray[1]. "</td>"."</tr>";
        }
        echo "</table>";
    }
    function coursetimetable(){
        
    }
 }


?>
<html>
    <head>
        <style>
        table,td,th
        {
            border: 1px solid blue;
        }
        </style>
        
</head>
</html>