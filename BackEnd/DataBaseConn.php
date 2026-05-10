<?php
    // Данные для подключения (стандартные для Open Server)
    $dataBaseHost = "localhost";
    $dataBaseName = "survey_db";
    $dataBaseLog = "root";
    $dataBasePass = "";
    $dataBaseCharset = "utf8mb4";

    // DSN (Data Source Name) — это адресная строка для базы
    $dsn = "mysql:host=$dataBaseHost;port=3305;dbname=$dataBaseName;charset=$dataBaseCharset";
    
    // Вот здесь пришлось добавлять port=3305 ибо вот стандартный порт для БД это именно 3306
    // Просто этот порт занял другая БД на моём компе

    // Настройки PDO
    $optionsOfPDO = [
        PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION, // Чтобы PHP выкидывал ошибки, если в SQL косяк
        PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,       // Чтобы данные возвращались в виде удобных массивов
        PDO::ATTR_EMULATE_PREPARES      => false,                  // Для безопасности (защита от SQL-инъекций)
    ];

    try {
        // Создаем само соединение
        $pdo = new PDO($dsn, $dataBaseLog, $dataBasePass, $optionsOfPDO);
        // Если мы здесь, значит всё ок!
    } catch(\PDOException $e) {
        // Выводим ошибку, если что-то не так
        // throw new \PDOException($e->getMessage(), (int)$e->getCode());
        die("Ошибка подключение: " . $e->getMessage() . " ERROR CODE: " . (int)$e->getCode());
    }   
?>