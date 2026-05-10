<?php 
    require_once __DIR__ . '/../StyleImportFile.php'; 
    $pageSpecificCSS = '/FrontEnd/CSS/settings.css'; 
    include_once $headOfLinksimp; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Настройки</title>
</head>
<body>

<?php 
    include_once $burgerFileImp; 
    include_once $headerFileImp; 
?>

<main class="settings-page-wrapper">
    <div class="settings-title-container">
        <h1 class="settings-main-title">Настройки</h1>
    </div>

    <!-- Блок выбора темы -->
    <section class="settings-content">
        <div class="setting-item">
            <div class="setting-text">
                <h3>Цветовая схема</h3>
                <p>Выберите режим отображения интерфейса</p>
            </div>
            
            <div class="theme-switcher">
                <button class="theme-btn light active">Светлая</button>
                <button class="theme-btn dark">Темная</button>
            </div>
        </div>
    </section>
</main>

<?php include_once $footerFileImp; ?>

</body>
</html>