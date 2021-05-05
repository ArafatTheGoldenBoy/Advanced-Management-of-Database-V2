<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'connection.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <section>
                    <h3>Create Student</h3>
                    <form action="process.php" method="post">
                        Student Name: <input type="text" name="student_name" required> <br>
                        <input type="submit" name="create_student" value="Add">
                    </form>
                </section>
            </div>
            <div class="col">
                <section>
                    <h3>Student List</h3>
                    <form action="edit_student.php" method = "post">
                    <?php
                        echo "<table class='table'>";
                            echo "<tr>";
                                echo "<th>" . "Id" . "</th>";
                                echo "<th>" . "Name" . "</th>";
                                echo "<th>" . "Action" . "</th>";
                            echo "</tr>";
                        $query = pg_query($db, "select * from list_of_all_students()");

                        while($row = pg_fetch_row($query)) {
                            echo "<tr>";
                                echo "<td>" . $row[0] . "</td>";
                                echo "<td>" . $row[1]  . "</td>";
                                echo "<td><button type= 'submit' name= 'student_id' value= '$row[0]' >" . "Edit"  . "</button></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    ?>
                    </form>
                </section>
            </div>
        </div>
        
        
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>