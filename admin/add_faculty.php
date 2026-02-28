<?php
session_start();
include "dbconnection.php";

if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name          = trim($_POST['name']);
    $designation   = trim($_POST['designation']);
    $qualification = trim($_POST['qualification']);
    $experience    = trim($_POST['experience']);
    $email         = trim($_POST['email']);
    $department    = trim($_POST['department']);

    // Image upload
    $imageName = "";
    if (!empty($_FILES['image']['name'])) {
        $imageName = time() . "_" . basename($_FILES['image']['name']);
        $targetPath = "../assets/img/faculty/" . $imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $targetPath);
    }

    $sql = "INSERT INTO faculty 
            (name, designation, qualification, experience, email, image, department)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssss",
        $name, $designation, $qualification,
        $experience, $email, $imageName, $department
    );
    $stmt->execute();

    header("Location: manage_faculty.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Faculty</title>
</head>
<body>

<h2>Add Faculty Profile</h2>

<form method="POST" enctype="multipart/form-data">

    <input type="text" name="name" placeholder="Faculty Name" required><br><br>

    <input type="text" name="designation" placeholder="Designation"><br><br>

    <input type="text" name="qualification" placeholder="Qualification"><br><br>

    <input type="text" name="experience" placeholder="Experience (e.g. 10 years)"><br><br>

    <input type="email" name="email" placeholder="Email"><br><br>

    <!-- ✅ Department Dropdown -->
    <label>Department</label><br>
    <select name="department" required>
        <option value="">-- Select Department --</option>
        <option value="BASIC SCIENCE AND HUMANITIES">BASIC SCIENCE AND HUMANITIES</option>
        <option value="CIVIL ENGINEERING">CIVIL ENGINEERING</option>
        <option value="ELECTRICAL ENGINEERING">ELECTRICAL ENGINEERING</option>
        <option value="MECHANICAL ENGINEERING">MECHANICAL ENGINEERING</option>
        <option value="COMPUTER SCIENCE AND TECHNOLOGY">COMPUTER SCIENCE AND TECHNOLOGY</option>
    </select>
    <br><br>

    <label>Faculty Image</label><br>
    <input type="file" name="image" accept="image/*"><br><br>

    <button type="submit">Save Faculty</button>

</form>


</body>
</html>
