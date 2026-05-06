<?php
include("includes/db.php");

if (!isset($_GET['id'])) {
    header("Location: regions.php");
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM regions WHERE id = $id";
$result = mysqli_query($conn, $query);
$region = mysqli_fetch_assoc($result);

if (!$region) {
    echo "المنطقة غير موجودة";
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title><?php echo $region['name']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <nav class="navbar">
        <h2 class="logo">اكتشف السعودية</h2>

        <div>
            <a href="index.php">الرئيسية</a>
            <a href="regions.php">معرض المناطق</a>
            <a href="admin/login.php">دخول المشرف</a>
            <button onclick="toggleNightMode()">الوضع الليلي</button>
        </div>
    </nav>
</header>

<main class="details-container">

    <section class="details-card">
        <img class="details-main-img" src="images/<?php echo $region['main_image']; ?>" alt="<?php echo $region['name']; ?>">

        <h1><?php echo $region['name']; ?></h1>
        <span class="category-label"><?php echo $region['category']; ?></span>

        <h2>نبذة ثقافية</h2>
        <p><?php echo $region['description']; ?></p>

        <h2>معلومات تاريخية</h2>
        <p><?php echo $region['history']; ?></p>

        <h2>أهم المعالم</h2>
        <ul class="landmarks">
            <?php
            $landmarks = explode("،", $region['landmarks']);
            foreach($landmarks as $landmark) {
                echo "<li>" . trim($landmark) . "</li>";
            }
            ?>
        </ul>

        <h2>صور من المنطقة</h2>

        <div class="details-gallery">
            <img src="images/<?php echo $region['image1']; ?>" alt="صورة إضافية">
            <img src="images/<?php echo $region['image2']; ?>" alt="صورة إضافية">
            <img src="images/<?php echo $region['image3']; ?>" alt="صورة إضافية">
        </div>

        <a class="main-btn" href="regions.php">العودة إلى معرض المناطق</a>
    </section>

</main>

<footer>
    <p>© 2026 اكتشف السعودية - مشروع تقنيات الإنترنت</p>
</footer>

<script src="script.js"></script>
</body>
</html>