<?php
$s_name = "localhost";
$u_name = "root";
$pwd = "";
$dbname = "lokesh_database";


//Create connection

$con = new mysqli($s_name,$u_name,$pwd,$dbname);
// Check connection

/*if ($conn->connect_error) 
{
   // die("Connection failed: " . $conn->connect_error);
}*/

$sql = "SELECT * from lokesh_table order by rollno asc";
$result = $con->query($sql);

if($result->num_rows > 0 )
{
    echo
    "
    <table border='1'>
    <tr>
        <th><b>Registration</b></th>
        <th><b>Student Name</b></th>
    </tr> 
    
    ";
    
    // Output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "
        <tr>
        <td>".$row["rollno"]."</td>
        <td>".$row["student_name"]."</td>
        </tr>
        ";
    }
    echo " </table>";

}
else
{
    echo " No Data Availble";
}
  
$con->close();

?>