<?php
$submit = $_POST['submit'];
$to = "aleard@yandex.ru";
$from = "info@aleard-design.ru/";
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$review = $_POST['review'];
$contact = $_POST['contact'];
$headers = "From:" . $from;
if($submit == 'smeta'){
    $subject = "Заказ сметы";
    $message = $name . " " .$lastname . " сделал заявку на смету: " . $contact;
    mail($to,$subject,$message,$headers);
    return true;
}
if($submit == 'remont'){
    $subject = "Заказ на ремонт";
    $message = $name . " " .$lastname . " сделал заявку на ремонт: " . $contact;
    mail($to,$subject,$message,$headers);
    return true;
}

if($submit == 'review'){
    $subject = "Отзыв";
    $message = $name . " " .$lastname . ", ".$contact." оставил отзыв: " . $review;
    mail($to,$subject,$message,$headers);
    return true;
}


return false;




?>
