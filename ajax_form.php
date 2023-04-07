<?
    ((isset($_POST['client'])&&$_POST['client']!="")&&(isset($_POST['tel'])&&$_POST['tel']!="")&&(isset($_POST['address'])&&$_POST['address']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
            $to = 'viktor.bulavin.993@ukr.net'; //Почта получателя, через запятую можно указать сколько угодно адресов
            $subject = 'Обратный звонок'; //Загаловок сообщения
            $message = '
                    <html>
                        <head>
                            <title>'.$subject.'</title>
                        </head>
                        <body>
                            <p>Имя: '.$_POST['client'].'</p>
                            <p>Телефон: '.$_POST['tel'].'</p>
                            <p>Адрес: '.$_POST['address'].'</p>                          
                        </body>
                    </html>'; //Текст нащего сообщения можно использовать HTML теги
            $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
            $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
            mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
    }
?>