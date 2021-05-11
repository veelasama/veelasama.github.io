<?php
/* Здесь мы проверяем существуют ли переменные, которые передала форма обратной связи. Если не существуют, то мы их создаем */
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['subject'])) {$message = $_POST['subject'];}
if (isset($_POST['message'])) {$message = $_POST['message'];}

/* Здесь необходимо вписать ваш e-mail адрес */
$address = "happyraccoon1@gmail.com";

/* Здесь вписуете тему, которая будет отображаться в теме письма */
$sub = "$subject";

/* А здесь прописываете сам текст сообщения, который будет Вам отправлен. Если Вам необходимо начать новую строку необходимо поставить \n */
$mes = "Автор указал такое имя: $name \nОставил такой E-mail: $email \nСодержание письма: \n$message";

/* А это функция, как раз занимается отправкой письма на указанный выше адрес */
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
?>