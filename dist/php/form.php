<?php
  $to = "al.losev.k@gmail.com";

  $subject = 'Заявка с сайта'; //Заголовок сообщения
  $message = '
          <html>
              <head>
                  <title>'.$subject.'</title>
              </head>
              <body>
                  <p>Имя: '.$_POST['name'].'</p>
                  <p>Email: '.$_POST['email'].'</p>
                  <p>Контактные данные: '.$_POST['phone'].'</p>
              </body>
          </html>'; //Текст сообщения
  $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
  $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
  mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
?>
