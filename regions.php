<?php
include("includes/db.php");

$query = "SELECT * FROM regions";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>معرض المناطق</title>
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

<main class="page-container">

    <section class="page-title">
        <h1>معرض المناطق</h1>
        <p>اختر منطقة للتعرف على تفاصيلها الثقافية والتاريخية.</p>
    </section>

    <section class="filter-box">
        <label>فلترة حسب التصنيف:</label>

        <select id="categoryFilter" onchange="filterRegions()">
            <option value="all">كل المناطق</option>
            <option value="تاريخية">تاريخية</option>
            <option value="دينية">دينية</option>
            <option value="تراثية">تراثية</option>
        </select>
    </section>

    <section class="gallery">

        <?php while($row = mysqli_fetch_assoc($result)) { ?>

            <article class="region-card" data-category="<?php echo $row['category']; ?>">
                <a href="details.php?id=<?php echo $row['id']; ?>">
                    <img src="images/<?php echo $row['main_image']; ?>" alt="<?php echo $row['name']; ?>">

                    <div class="card-content">
                        <span><?php echo $row['category']; ?></span>
                        <h2><?php echo $row['name']; ?></h2>
                        <p><?php echo $row['short_description']; ?></p>
                    </div>
                </a>
            </article>

        <?php } ?>

    </section>

</main>

<footer>
    <p>© 2026 اكتشف السعودية - مشروع تقنيات الإنترنت</p>
</footer>

<script src="script.js"></script>
</body>
</html>