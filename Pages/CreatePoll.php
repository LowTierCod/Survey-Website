<?php 
    require_once __DIR__ . '/../StyleImportFile.php'; 
    $pageSpecificCSS = '/FrontEnd/CSS/create.css'; 
    include_once $headOfLinksimp; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создать опрос</title>
</head>
<body>

<?php 
    include_once $burgerFileImp; 
    include_once $headerFileImp; 
?>

<!-- Блок 1: Основной фоновой блок -->
<main class="create-poll-wrapper">
    
    <div class="create-title-container">
        <h1 class="create-main-title">Новый опрос</h1>
    </div>

    <form action="/Core/Handlers/SavePoll.php" method="POST">
        <!-- Блок 2: Инпут для главного вопроса -->
        <section class="question-section">
            <input type="text" name="poll_title" class="main-input-dark" placeholder="Введите ваш вопрос..." required>
        </section>

        <!-- Блок 3: Конструктор вариантов -->
        <section class="options-constructor">
            <div class="options-list" id="optionsList">
                <!-- Подблок 1: Инпут для варианта ответа -->
                <div class="option-item">
                    <input type="text" name="options[]" class="option-input-dark" placeholder="Вариант ответа">
                </div>
            </div>

            <!-- Подблок 2: Квадратная кнопка "+" -->
            <div class="add-option-container">
                <button type="button" class="btn-add-square" id="addOptionBtn">+</button>
            </div>
        </section>

        <!-- Финальная кнопка (вне блоков, для отправки) -->
        <div class="submit-section">
            <button type="submit" class="btn-publish">Опубликовать</button>
        </div>
    </form>

</main>

<?php include_once $footerFileImp; ?>

<!-- Маленький скрипт для работы кнопки "+" (без него никуда) -->
<script>
    document.getElementById('addOptionBtn').onclick = function() {
        const list = document.getElementById('optionsList');
        const newItem = document.createElement('div');
        newItem.className = 'option-item';
        newItem.innerHTML = '<input type="text" name="options[]" class="option-input-dark" placeholder="Вариант ответа">';
        list.appendChild(newItem);
    };
</script>

</body>
</html>