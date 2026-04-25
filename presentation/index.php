<?php require_once '../application/db.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- tailwindcss -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-2xl font-bold mb-4" >STUDENTS...</h1>
   <span>
    <a href='add_student.php' class='inline-block bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-indigo-600 hover:to-blue-500 text-white font-semibold py-2 px-5 rounded-lg shadow-lg transition duration-300'>
      + Add New Student
    </a>
     </span>  
  
    <?php
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    echo "<table border='1' cellspacing='0' cellpadding='10'>";
   
    
    // Table Header
    echo "<tr>
         <th class='px-4 py-2'>First Name</th>
        <th class='px-4 py-2'>Last Name</th>
        <th class='px-4 py-2'>Email</th>
            <th class='px-4 py-2'>Phone</th>
            <th class='px-4 py-2'>DOB</th>
            <th class='px-4 py-2'>Gender</th>
            <th class='px-4 py-2'>Address</th>
          </tr>";

    // Table Data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td class='px-4 py-2'>" . $row['first_name'] . "</td>
                <td class='px-4 py-2'>" . $row['last_name'] . "</td>
                <td class='px-4 py-2'>" . $row['email'] . "</td>
                <td class='px-4 py-2'>" . $row['phone'] . "</td>
                <td class='px-4 py-2'>" . $row['date_of_birth'] . "</td>
                <td class='px-4 py-2'>" . $row['gender'] . "</td>
                <td class='px-4 py-2'>" . $row['address'] . "</td>
              </tr>";
    }

    echo "</table>";

} else {
    echo "No students found.";
}
?>
</body>
</html>