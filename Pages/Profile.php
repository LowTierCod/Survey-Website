<?php 
    require_once __DIR__ . '/../StyleImportFile.php'; 
    $pageSpecificCSS = '/FrontEnd/CSS/profile.css'; 
    include_once $headOfLinksimp; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
</head>
<body>

<?php 
    include_once $burgerFileImp; 
    include_once $headerFileImp; 
?>

<!-- Блок 1: Основной фоновый контейнер -->
<main class="profile-page-wrapper">
    
    <!-- Блок 2: Аватарка + Данные (Логин/Пароль) -->
    <section class="profile-info-section">
        <div class="avatar-block">
            <!-- Заглушка для аватарки -->
            <div class="avatar-circle"></div>
        </div>
        <div class="credentials-block">
            <div class="input-field-dark">
                <span class="field-label">Логин:</span>
                <span class="field-value">User_Admin</span>
            </div>
            <div class="input-field-dark">
                <span class="field-label">Пароль:</span>
                <span class="field-value">********</span>
            </div>
        </div>
    </section>

    <!-- Блок 3: Статистика (Два вытянутых блока) -->
    <section class="stats-row">
        <div class="stat-box-large">
            <span class="stat-number">5</span>
            <span class="stat-text">Опросов в топе</span>
        </div>
        <div class="stat-box-large">
            <span class="stat-number">12</span>
            <span class="stat-text">Активных тестов</span>
        </div>
    </section>

    <!-- Блок 4: Нижняя панель с кнопкой -->
    <section class="action-footer-block">
        <a href="CreatePoll.php"><button class="btn-add-poll"> Добавить опрос </button></a>
    </section>

</main>

<?php include_once $footerFileImp; ?>

</body>
</html>