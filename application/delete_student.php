<?php
    require_once 'db.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM students WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            header("Location: ../presentation/index.php");
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid request.";
    }