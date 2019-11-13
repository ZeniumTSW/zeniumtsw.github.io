<?php
$submit = $_POST['submit'];
$to = "aleard@yandex.ru";
$from = "info@aleard-design.ru/";
$name = $_POST['name'];
if($_POST['message']){
    $message = "\n\n Сообщение:" . $_POST['message'];
};
if($_POST['typ']){
    $typ = "\n\n Вид ремонта:" . $_POST['typ'];
};
if($_POST['zamer']){
    $zamer = "\n\n Тип замера:" . $_POST['zamer'];
};
if($_POST['email']){
    $email = "\n\n Е-майл:" . $_POST['email'];
};
if($_POST['phone']){
    $phone = "\n\n Телефон: " . $_POST['phone'];
};
$headers = "From:" . $from;
if($submit == 'contact'){
    $subject = "Форма отправки сообщений с контактной формы";
    $message = $name . " оставил сообщение:" . $_POST['message'] . $phone;
    mail($to,$subject,$message,$headers);
    return true;
}
if($submit == 'callback'){
    $subject = "Заказ обратного звонка";
    $message = $name . " заказал звонок:" . $phone;
    mail($to,$subject,$message,$headers);
    return true;
}
if($submit == 'zamer'){
    $subject = "Вызов замерщика";
    $message = $name . " сделал заявку на замер:" . $phone. $message. $zamer;
    mail($to,$subject,$message,$headers);
    return true;
}
if($submit == 'smeta'){
    $subject = "Заказ сметы";
    $message = $name . " сделал заявку на смету:" . $phone;
    mail($to,$subject,$message,$headers);
    return true;
}
if($submit == 'remont'){
    $subject = "Заказ на ремонт";
    $message = $name . " сделал заявку на ремонт:" . $phone . $typ;
    mail($to,$subject,$message,$headers);
    return true;
}
return false;




?>
