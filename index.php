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
</header>

<section class="video-section">
           <video autoplay muted loop playsinline class="bg-video">
        <source src="video/saudivideo.mov" type="video/mp4">
           </video>
</section>

    <section class="hero-text-section">
            <h1>مرحبًا بك في اكتشف السعودية</h1>
            <p>
                المملكة العربية السعودية وطن غني بالتاريخ، والثقافة، والطبيعة المتنوعة.
                يجمع هذا الموقع بين أهم المناطق والمعالم التاريخية والثقافية في المملكة بطريقة تفاعلية.
            </p>
            <a class="hero-btn" href="regions.php">استكشف المناطق</a>

        <!--<div class="hero-image">
            <img src="image/saudi.jpg" alt="صورة من المملكة العربية السعودية">
        </div>-->

    </section>

<main class="home-content">

    <section class="info-box">
        <h2>هدف الموقع</h2>
        <p>
            يهدف هذا الموقع إلى تعريف الزوار بمناطق المملكة العربية السعودية، وتسليط الضوء على ثقافتها،
            وتاريخها، ومعالمها المهمة من خلال صفحات ديناميكية تعتمد على قاعدة البيانات.
        </p>
    </section>

    <!--<section class="features">
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
    </section>-->

    <section class="story-section">
    <div class="story-image">
        <img src="image/culture.jpg" alt="الثقافة السعودية">
    </div>

    <div class="story-text">
        <span>الثقافة</span>
        <h2>التراث السعودي</h2>
        <p>استكشاف العادات والتراث السعودي في مختلف مناطق المملكة والتعرف على تنوعها الثقافي.</p>
    </div>
</section>

<section class="story-section reverse">
    <div class="story-image">
        <img src="image/landmark.jpg" alt="المعالم السعودية">
    </div>

    <div class="story-text">
        <span>المعالم</span>
        <h2>وجهات تاريخية وسياحية</h2>
        <p>عرض أهم المعالم التاريخية والسياحية داخل المملكة العربية السعودية بطريقة جذابة.</p>
    </div>
</section>

<section class="story-section">
    <div class="story-image">
        <img src="image/areas.jpg" alt="مناطق السعودية">
    </div>

    <div class="story-text">
        <span>المناطق</span>
        <h2>استكشف مناطق المملكة</h2>
        <p>تصفح مناطق المملكة بطريقة سهلة وتفاعلية من خلال معرض المناطق وصفحات التفاصيل.</p>
    </div>
</section>

</main>

<footer>
    <p>© 2026 اكتشف السعودية - مشروع تقنيات الإنترنت</p>
</footer>

<script src="script.js"></script>
</body>
</html>
