<?php 
    // require_once "BackEnd/DataBaseConn.php";

    require_once 'StyleImportFile.php'; 

    include_once $headOfLinksimp; 
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Survey-site/Сайт опросники</title>
    </head>
    <body>
        <?php 
            include_once $burgerFileImp; 
            include_once $headerFileImp; 
        ?>

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
        
        <?php include_once $footerFileImp; ?>
    </body>
</html>
