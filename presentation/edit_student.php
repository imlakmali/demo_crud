<?php
    require_once '../application/db.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
    } else {
        echo "Student not found.";
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <!-- tailwindcss -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
   

    <form action="../application/editStudent_controller.php" method="POST" class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-2xl shadow-xl">
    <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">
        Edit Student
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div>
            <label class="text-sm font-semibold text-gray-600">First Name</label>
            <input type="text" name="first_name" value="<?php echo $student['first_name']; ?>"
                class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none">
        </div>

        <div>
            <label class="text-sm font-semibold text-gray-600">Last Name</label>
            <input type="text" name="last_name" value="<?php echo $student['last_name']; ?>"
                class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none">
        </div>

        <div class="md:col-span-2">
            <label class="text-sm font-semibold text-gray-600">Email</label>
            <input type="email" name="email" value="<?php echo $student['email']; ?>"
                class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none">
        </div>

        <div>
            <label class="text-sm font-semibold text-gray-600">Phone</label>
            <input type="tel" name="phone" value="<?php echo $student['phone']; ?>"
                class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none">
        </div>

        <div>
            <label class="text-sm font-semibold text-gray-600">Date of Birth</label>
            <input type="date" name="date_of_birth" value="<?php echo $student['date_of_birth']; ?>"
                class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none">
        </div>

        <div>
            <label class="text-sm font-semibold text-gray-600">Gender</label>
            <select name="gender"
                class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
        </div>

        <div class="md:col-span-2">
            <label class="text-sm font-semibold text-gray-600">Address</label>
            <textarea name="address" rows="1"
                class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 outline-none"><?php echo $student['address']; ?></textarea>
        </div>

    </div>

    <button type="submit"
        class="mt-6 w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 rounded-lg transition">
        Update Student
    </button>

</form>
</body>
</html>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded">
            Update Student
        </button>
    </form>
</body>
</html>