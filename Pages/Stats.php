<?php 
    // 1. Подключаем файл путей
    require_once __DIR__ . '/../StyleImportFile.php'; 

    // 2. Указываем путь для CSS (относительно КОРНЯ сайта для браузера)
    $pageSpecificCSS = '/FrontEnd/CSS/stats.css'; 

    // 3. Подключаем хедер
    include_once $headOfLinksimp; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Статистика</title>
</head>
<body>
<?php 
    include_once $burgerFileImp; 
    include_once $headerFileImp; 
?>
<!-- Блок 1: Основной фоновой контейнер -->
<main class="stats-page-wrapper">
    
    <!-- Блок 2: Заголовок по центру -->
    <div class="stats-title-container">
        <h1 class="stats-main-title">Статистика</h1>
    </div>
    <div class="polls-list-container">
        <a href="#" class="poll-entry-field">
            <span class="poll-name">Любимый язык программирования</span>
        </a>
        <a href="#" class="poll-entry-field">
            <span class="poll-name">Выбор фреймворка 2026</span>
        </a>
    </div>
</main>
<?php include_once $footerFileImp; ?>

</body>
</html>