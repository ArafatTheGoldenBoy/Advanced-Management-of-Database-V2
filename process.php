<?php
    include_once 'connection.php';
    if(isset($_POST['create_student'])) {
        $name = $_POST['student_name'];
        $sql = "select add_student_name('$name')";
        if(pg_query($db,$sql)) {
            header("Location: Student.php");
            exit();
        }
    }
    if(isset($_POST['student_id'])) {
        $id = $_POST['student_id'];
        $sql = "select change_student_name($id)";
        if(pg_query($db,$sql)) {
            header("Location: Student.php");
            exit();
        }
    }
?>