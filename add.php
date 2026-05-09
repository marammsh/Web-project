<?php
include("auth.php");
include("../includes/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $category = $_POST["category"];
    $short_description = $_POST["short_description"];
    $description = $_POST["description"];
    $history = $_POST["history"];
    $landmarks = $_POST["landmarks"];

    $main_image = $_POST["main_image"];
    $image1 = $_POST["image1"];
    $image2 = $_POST["image2"];
    $image3 = $_POST["image3"];

    $query = "INSERT INTO regions
    (name, category, short_description, description, history, landmarks,
    main_image, image1, image2, image3)

    VALUES
    ('$name','$category','$short_description','$description','$history',
    '$landmarks','$main_image','$image1','$image2','$image3')";

    mysqli_query($conn, $query);

    header("Location: dashboard.php?msg=added");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
<meta charset="UTF-8">
<title>إضافة منطقة</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>

<header>
<nav class="navbar">
<h2 class="logo">إضافة منطقة</h2>

<div>
<a href="dashboard.php">لوحة التحكم</a>
<a href="logout.php">تسجيل خروج</a>
</div>
</nav>
</header>

<main class="admin-container">

<form class="admin-form" method="POST">

<h2>إضافة منطقة جديدة</h2>

<label>اسم المنطقة</label>
<input type="text" name="name" required>

<label>التصنيف</label>
<select name="category" required>
<option value="">اختر التصنيف</option>
<option value="تاريخية">تاريخية</option>
<option value="دينية">دينية</option>
<option value="تراثية">تراثية</option>
<option value="ترفيه">ترفيه</option>
</select>

<label>وصف مختصر</label>
<textarea name="short_description" required></textarea>

<label>الوصف الكامل</label>
<textarea name="description" required></textarea>

<label>التاريخ</label>
<textarea name="history" required></textarea>

<label>المعالم</label>
<textarea name="landmarks" required></textarea>

<label>الصورة الرئيسية</label>
<input type="text" name="main_image" required>

<label>الصورة الثانية</label>
<input type="text" name="image1">

<label>الصورة الثالثة</label>
<input type="text" name="image2">

<label>الصورة الرابعة</label>
<input type="text" name="image3">

<input type="submit" value="إضافة">

</form>

</main>

</body>
</html>