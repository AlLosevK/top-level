<?php

    // Обработка только запросов POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем данные полей формы и удаляем пробелы.
        $name = strip_tags(trim($_POST["name"]));
	$name = str_replace(array("r","n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Проверяем, были ли почтовому скрипту отправлены данные.
if( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Устанавливаем код ответа 400 (bad request) и выходим.
http_response_code(400);
echo "Oops! Therewas a problem with your submission. Pleasecomplete the form and tryagain.";
exit;
        }

        // Устанавливаем email адрес получателя.
        // FIXME: Изменяем егона нужный email-адрес.
        $recipient = "al.losev.k@gmail.com";

        // Задаем тему письма.
        $subject = "New contactfrom $name";

        // Создаем содержимое письма.
        $email_content = "Name: $namen";
        $email_content .= "Email: $emailnn";
        $email_content .= "Message:n$messagen";

        // Создаем заголовок письма.
        $email_headers = "From: $name <$email>";

        // Отправляем письмо.
if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Устанавливаем код ответа 200 (okay).
http_response_code(200);
echo "Thank You! Your message hasbeensent.";
        } else {
            // Устанавливаем код ответа 500 (internal server error).
http_response_code(500);
echo "Oops! Somethingwentwrong and wecouldn'tsend your message.";
        }

    } else {
        // Не POST запрос, устанавливаемкод ответа 403 (forbidden).
http_response_code(403);
echo "Therewas a problem with your submission, pleasetryagain.";
    }

?>
