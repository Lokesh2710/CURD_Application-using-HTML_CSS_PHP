<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURD</title>
    <script>
        function create_data()
        {
            <?php include 'create.php';?>
        }
        function update_data()
        {
            <?php include 'update.php';?>
        }
        function delete_data()
        {
            <?php include 'delete.php';?>
        }
    </script>
</head>
<body>
    <div border="1" style="padding: 10px 10px 10px 10px;margin:20px;background-color:black;color:white">
        <!--button onclick="show_form()" ondblclick="hide_form()">Click me to Create Data </button-->
        <h2>Create Employee Data</h2>
        <div id="submit-form" style="display:inline-block";>
            <form action="create.php" method="POST" style="border:10px; padding: 10px; background-color: blueviolet;" >
                <table>
                    <tr>
                        <td>Roll no.</td>
                        <td><input type="nunmber" name="send_rno" required></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="send_name" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="SUBMIT" onclick="create_data()"></td>
                    </tr>
                </table>
            </form>
        </div>
    <br>
    <h2>Update Employee Data</h2>
        <div id="update-form" style="display:inline-block";>
            <form action="update.php" method="POST" style="border:10px; padding: 10px; background-color: blueviolet;" >
            <table>
                    <tr>
                        <td>Roll no.</td>
                        <td><input type="nunmber" name="send_rno" required></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="send_name" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="UPDATE" onclick="update_data()"></td>
                    </tr>
                </table>
            </form>
        </div>

    <br>
    <h2>Delete Employee Data</h2>
        <div id="delete-form" style="display:inline-block";>
            <form action="delete.php" method="POST" style="border:10px; padding: 10px; background-color: blueviolet;" >
                <table>
                    <tr>
                        <td>Roll no.</td>
                        <td><input type="nunmber" name="send_rno" required></td>
                        <td><input type="submit" value="DELETE" onclick="delete_data()"></td>
                    </tr>
                </table>
            </form>
        </div>
        <br>
        <br>
        <div class="menu">
            <?php include 'show.php';?>
        </div>


    

    

    </div>

    

    


</body>
</html>

