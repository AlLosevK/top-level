<?php
  $to = "al.losev.k@gmail.com";

  $subject = 'квиз'; //Заголовок сообщения
  $message = '
          <html>
              <head>
                  <title>'.$subject.'</title>
              </head>
              <body>
                  <p>Тип недвижа: '.$_POST['for'].'</p>
                  <p>По бабкам: '.$_POST['price'].'</p>
                  <p>спальняков: '.$_POST['rooms'].'</p>
                  <p>маляву писать на: '.$_POST['service'].'</p>
                  <p>по адресу такому: '.$_POST['phone'].'</p>
              </body>
          </html>'; //Текст сообщения
  $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
  $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
  mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
?>
