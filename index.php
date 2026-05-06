<?php
include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>اكتشف السعودية</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="main-header">
    <nav class="navbar">
        <h2 class="logo">اكتشف السعودية</h2>

        <div>
            <a href="index.php">الرئيسية</a>
            <a href="regions.php">معرض المناطق</a>
            <a href="admin/login.php">دخول المشرف</a>
            <button onclick="toggleNightMode()">الوضع الليلي</button>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-text">
            <h1>مرحبًا بك في اكتشف السعودية</h1>
            <p>
                المملكة العربية السعودية وطن غني بالتاريخ، والثقافة، والطبيعة المتنوعة.
                يجمع هذا الموقع بين أهم المناطق والمعالم التاريخية والثقافية في المملكة بطريقة تفاعلية.
            </p>
            <a class="main-btn" href="regions.php">استكشف المناطق</a>
        </div>

        <div class="hero-image">
            <img src="images/saudi.jpg" alt="صورة من المملكة العربية السعودية">
        </div>
    </section>
</header>

<main class="home-content">

    <section class="info-box">
        <h2>هدف الموقع</h2>
        <p>
            يهدف هذا الموقع إلى تعريف الزوار بمناطق المملكة العربية السعودية، وتسليط الضوء على ثقافتها،
            وتاريخها، ومعالمها المهمة من خلال صفحات ديناميكية تعتمد على قاعدة البيانات.
        </p>
    </section>

    <section class="features">
        <div class="feature-card">
            <h3>الثقافة</h3>
            <p>استكشاف العادات والتراث السعودي في مختلف المناطق.</p>
        </div>

        <div class="feature-card">
            <h3>المعالم</h3>
            <p>عرض أهم المعالم التاريخية والسياحية داخل المملكة.</p>
        </div>

        <div class="feature-card">
            <h3>المناطق</h3>
            <p>تصفح مناطق المملكة بطريقة سهلة وتفاعلية.</p>
        </div>
    </section>

</main>

<footer>
    <p>© 2026 اكتشف السعودية - مشروع تقنيات الإنترنت</p>
</footer>

<script src="script.js"></script>
</body>
</html>