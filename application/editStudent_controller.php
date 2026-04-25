<?php
    require_once 'db.php';  
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date_of_birth = $_POST['date_of_birth'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        $sql = "UPDATE students SET first_name='$first_name', last_name='$last_name', email='$email', phone='$phone', date_of_birth='$date_of_birth', gender='$gender', address='$address' WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            header("Location: ../presentation/index.php");
            exit();
        } else {
            echo "Error updating student: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid request.";
        exit();
    }
?>