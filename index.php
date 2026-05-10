<? 
    require_once "BackEnd/DataBaseConn.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Monolith Design</title>
    <link rel="stylesheet" href="FrontEnd/CSS/style.css">
    <link rel="stylesheet" href="FrontEnd/CSS/theme.css">
    <link rel="stylesheet" href="FrontEnd/CSS/burger.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="mobile-menu" id="mobileMenu">
        <div class="menu-content">
            <ul class="menu-list">
                <li><a href="/profile" class="menu-link">Личный кабинет</a></li>
                <li><a href="/stats" class="menu-link">Статистика</a></li>
                <li><a href="/popular" class="menu-link">Самые популярные</a></li>
                <li><a href="/settings" class="menu-link">Настройки</a></li>
            </ul>
            <div class="verion">v 1.0.0 by Admin</div>
            <!-- Кнопка закрытия (крестик) внизу -->
            <button class="close-menu" id="closeMenu" aria-label="Закрыть меню">
                <div class="cross"></div>
            </button>
           
        </div>
    </nav>

    <header class="main-header">
        <button class="burger-menu" aria-label="Открыть меню">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        
        <div class="user-profile">
            <div class="avatar"></div>
        </div>
    </header>

    <section class="poll-container">
        <article class="poll-card">
            
            
            <header class="poll-header">
                <div class="author-info">
                    <h3 class="poll-title">Твой любимый язык программирования?</h3>
                    <span class="author-name">от Admin_Master</span>
                </div>
                <div class="poll-date"><?php echo date("H:i d.m.Y ") ?> </div>
            </header>

            
            
            <div class="poll-content">
                <p class="question-text">На каком стеке планируешь писать свой следующий монолит?</p>
                
                <div class="options-list">
                
                    <div class="option-row">
                        <div class="option-bar">
                            <span class="option-text">Python (FastAPI)</span>
                        </div>
                        <span class="option-percentage">0%</span>
                    </div>

                    <div class="option-row">
                        <div class="option-bar">
                            <span class="option-text">PHP (Vanilla)</span>
                        </div>
                        <span class="option-percentage">0%</span>
                    </div>

                    <div class="option-row">
                        <div class="option-bar">
                            <span class="option-text">JavaScript (Node)</span>
                        </div>
                        <span class="option-percentage">0%</span>
                    </div>
                </div>
                    
                <div class="poll-actions">
                    <button class="action-btn">
                        <span class="icon">📊</span> Результаты
                    </button>
                    <button class="action-btn">
                        <span class="icon">💬</span> Комментарии
                    </button>
                    <button class="action-btn highlight">
                        <span class="icon">🔔</span> Отслеживать
                    </button>
                </div>
            </div>

        </article>
    </section>
    
    <footer class="main-footer">
        <div class="footer-content">
            <!-- Левая кнопка -->
            <button class="footer-btn">
                <span class="icon">📈</span> Статистика
            </button>

            <!-- Правая кнопка-аватар -->
            <a href="/profile" class="footer-avatar" title="Личный кабинет">
                <!-- Здесь может быть фото или иконка -->
            </a>
        </div>
    </footer>
</body>

<script>
    const burgerBtn = document.querySelector('.burger-menu');
    const closeBtn = document.getElementById('closeMenu');
    const mobileMenu = document.getElementById('mobileMenu');

    // Открыть
    burgerBtn.addEventListener('click', () => {
        mobileMenu.classList.add('active');
        document.body.style.overflow = 'hidden'; // Запрещаем скролл при открытом меню
    });

    // Закрыть
    closeBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        document.body.style.overflow = ''; // Возвращаем скролл
    });
</script>

</html>
