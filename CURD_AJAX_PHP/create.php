<?php
    $servername = "localhost";
    $username= "root";
    $password = "";
    $dbname = "lokesh_database";

    $conn = new mysqli($servername,$username,$password,$dbname);
    
    if($conn->connect_error)
    {
        die("Connection failed " .$conn->connect_error."<br>");
    }
    else
    {
        echo " Application Connected to Database Successfully ";
        $student_id = $_POST["send_rno"];
        $student_name = $_POST["send_name"];

        $sql = "INSERT INTO lokesh_table (rollno,student_name) VALUES ($student_id,'$student_name')";
        //if($conn->multi_query($sql) === true)
        if($conn->query($sql)=== true)
        {
            echo" <br>Congrates ! Record is succesfully Saved";
            echo " <br>Your inserted data is  <br>
             ID -".$student_id. "<br>
             NAME -".$student_name. "<br>";

             header('Location: http://localhost/CURD_AJAX_PHP/new.php');
        }
        else
        {
            echo "error : ".$sql. "<br>" . $conn->error;
        }
    }

    $conn->close();
    
    ?>