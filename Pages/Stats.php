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

<main class="main-container">
    <h1>Статистика готова!</h1>
    <!-- Твоё дерево элементов -->
</main>

<?php include_once $footerFileImp; ?>

</body>
</html>