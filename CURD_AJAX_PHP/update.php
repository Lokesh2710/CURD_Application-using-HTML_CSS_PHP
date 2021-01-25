<?php
    $servername = "localhost";
    $username= "root";
    $password = "";
    $dbname = "lokesh_database";

    $conn = new mysqli($servername,$username,$password,$dbname);
    
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        $student_id = $_POST["send_rno"];
        $student_name = $_POST["send_name"];
        
        $sql = "UPDATE lokesh_table SET student_name ='$student_name' WHERE rollno=$student_id";

        if ($conn->query($sql) ==TRUE) 
        {
            echo "Newly updated record is Updated";
            header('Location: http://localhost/CURD_AJAX_PHP/new.php');
        } else 
        {
            echo "Error Updating record: " . $conn->error;
        }
    }
      $conn->close();
?>