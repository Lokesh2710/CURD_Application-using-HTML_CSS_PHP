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
        $ide = $_POST["send_rno"];
        
        // sql to delete a record
        $sql = "DELETE FROM lokesh_table WHERE rollno=$ide"; /*Always use like this */
        
        if ($conn->query($sql) === TRUE) 
        {
            echo "Record deleted successfully";
            header('Location: http://localhost/CURD_AJAX_PHP/new.php');
        } else 
        {
            echo "Error deleting record: " . $conn->error;
        }
    }
      $conn->close();
?>