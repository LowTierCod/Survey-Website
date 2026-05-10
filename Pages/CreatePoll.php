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
<main class="create-poll-wrapper">
    <div class="create-title-container">
        <h1 class="create-main-title">Новый опрос</h1>
    </div>

    <form action="/Core/Handlers/SavePoll.php" method="POST">
        <!-- Блок 2: Два инпута для вопроса (Основной и Дополнительный) -->
        <section class="question-section">
            <input type="text" name="poll_title" class="main-input-dark" placeholder="Заголовок опроса (основной вопрос)" required>
            <input type="text" name="poll_subtitle" class="main-input-dark subtitle" placeholder="Дополнительное описание или подвопрос">
        </section>

        <!-- Блок 3: Конструктор вариантов -->
        <section class="options-constructor">
            <p class="section-label">Варианты ответов:</p>
            <div class="options-list" id="optionsList">
                <!-- Начальное поле ответа -->
                <div class="option-item">
                    <input type="text" name="options[]" class="option-input-dark" placeholder="Текст ответа" required>
                    <button type="button" class="btn-remove" onclick="this.parentElement.remove()">×</button>
                </div>
            </div>

            <!-- Кнопка добавления с пояснением -->
            <div class="add-option-container">
                <button type="button" class="btn-add-square" id="addOptionBtn">+</button>
                <span class="add-label">Добавить вариант ответа</span>
            </div>
        </section>

        <div class="submit-section">
            <button type="submit" class="btn-publish">Опубликовать опрос</button>
        </div>
    </form>
</main>

<script>
    document.getElementById('addOptionBtn').onclick = function() {
        const list = document.getElementById('optionsList');
        const newItem = document.createElement('div');
        newItem.className = 'option-item';
        newItem.innerHTML = `
            <input type="text" name="options[]" class="option-input-dark" placeholder="Текст ответа">
            <button type="button" class="btn-remove" onclick="this.parentElement.remove()">×</button>
        `;
        list.appendChild(newItem);
    };
</script>

<?php include_once $footerFileImp; ?>
</body>
</html>