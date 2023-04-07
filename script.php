<?php
    $msg_box = ""; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($_POST['user_name'] == "") $errors[] = "Поле 'Ваше имя' не заполнено!";
    if($_POST['user_phone'] == "") $errors[] = "Поле 'Ваш номер телефона' не заполнено";
    if($_POST['user_adress'] == "") $errors[] = "Поле 'Ваш адресс' не заполнено";
 
    // если форма без ошибок
    if(empty($errors)){     
        // собираем данные из формы
        $_POST['user_name'] . "<br/>";
        $_POST['user_phone'] . "<br/>";
        $_POST['user_adress'] . "<br/>";
        send_mail($message); // отправим письмо
        // выведем сообщение об успехе
        $msg_box = "<span style='color: green;'>Сообщение успешно отправлено!</span>";
    }else{
        // если были ошибки, то выводим их
        $msg_box = "";
        foreach($errors as $one_error){
            $msg_box .= "<span style='color: red;'>$one_error</span><br/>";
        }
    }
 
    // делаем ответ на клиентскую часть в формате JSON
    echo json_encode(array(
        'result' => $msg_box
    ));
?>