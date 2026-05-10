<?php 
    require_once __DIR__ . '/../StyleImportFile.php'; 
    $pageSpecificCSS = '/FrontEnd/CSS/popular.css'; 
    include_once $headOfLinksimp; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Популярные опросы</title>
</head>
<body>

<?php 
    include_once $burgerFileImp; 
    include_once $headerFileImp; 
?>

<main class="popular-page-wrapper">
    
    <!-- Блок 2: Заголовок -->
    <div class="popular-title-container">
        <h1 class="popular-main-title">Самые популярные</h1>
    </div>

    <!-- Блок 3: Пьедестал -->
    <div class="podium-container">
        
        <!-- 2 МЕСТО (Серебро) - Левее центра -->
        <div class="pedestal silver" style="order: 1;">
            <div class="pedestal-content">
                <span class="top-rank">Топ 2</span>
                <p class="poll-title">Лучший редактор кода</p>
            </div>
            <div class="pedestal-base">
                <span class="votes-count">850 голосов</span>
            </div>
        </div>

        <!-- 1 МЕСТО (Золото) - По центру -->
        <div class="pedestal gold" style="order: 2;">
            <div class="pedestal-content">
                <span class="top-rank">Топ 1</span>
                <p class="poll-title">Python vs JavaScript</p>
            </div>
            <div class="pedestal-base">
                <span class="votes-count">1,240 голосов</span>
            </div>
        </div>

        <!-- 3 МЕСТО (Медь/Бронза) - Правее -->
        <div class="pedestal bronze" style="order: 3;">
            <div class="pedestal-content">
                <span class="top-rank">Топ 3</span>
                <p class="poll-title">Любимая игра 2026</p>
            </div>
            <div class="pedestal-base">
                <span class="votes-count">620 голосов</span>
            </div>
        </div>

    </div>

</main>

<?php include_once $footerFileImp; ?>
</body>
</html>