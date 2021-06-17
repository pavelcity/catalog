<?php


 

$whatForm = '';
if (isset($_POST['whatForm'])) {
	$whatForm = $_POST['whatForm'];
}

$zakaz = '';
if (isset($_POST['zakaz'])) {
	$zakaz = $_POST['zakaz'];
}




$name = '';
if (isset($_POST['name'])) {
	$name = $_POST['name'];
}

$phone = '';
if (isset($_POST['phone'])) {
	$phone = $_POST['phone'];
}


$email = '';
if (isset($_POST['email'])) {
	$email = $_POST['email'];
}

$message = '';
if (isset($_POST['message'])) {
	$message = $_POST['message'];
}


$adress = '';
if (isset($_POST['adress'])) {
	$adress = $_POST['adress'];
}












$who = $whatForm;

$sendinfo = ($who) ? $who : '';
$sendinfo .= ($name) ? '%0A' . '<b>Имя: </b> ' . $name . '%0A' : '';
$sendinfo .= ($zakaz) ? '<b>Заказ: </b> ' . $zakaz . '%0A' : '';
$sendinfo .= ($phone) ? '<b>Телефон: </b> ' . $phone . '%0A' : '';
$sendinfo .= ($email) ? '<b>email: </b> ' . $email . '%0A' : '';
$sendinfo .= ($adress) ? '<b>адрес: </b> ' . $adress . '%0A' : '';
$sendinfo .= ($message) ? '<b>Сообщение: </b> ' . $message . '%0A' : '';









$token = '1754861255:AAFiUsgJ-TsrcthrUVYMrvnaD4201hwNdxY';
$chat_id = '-566347952';


$txt = $sendinfo;
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");







$sendinfo2 = ($who) ? $who : '';
$sendinfo2 .= ($name) ? '<br>' . '<b>Имя: </b> ' . $name : '';
$sendinfo2 .= ($phone) ? '<br>' . '<b>Телефон: </b> ' . $phone : '';
$sendinfo2 .= ($email) ? '<br>' . '<b>email: </b> ' . $email : '';
$sendinfo2 .= ($dateModal) ? '<br>' . '<b>Заезд: </b> ' . $dateModal : '';
$sendinfo2 .= ($whatNomer) ? '<br>' . '<b>Номер: </b> ' . $whatNomer : '';
$sendinfo2 .= ($message) ? '<br>' . '<b>Сообщение: </b> ' . $message : '';
$sendinfo2 .= ($dateEnter) ? '<br>' . '<b>Дата заезда: </b> ' . $dateEnter : '';
$sendinfo2 .= ($dateEnd) ? '<br>' . '<b>Дата выезда: </b> ' . $dateEnd : '';





$to = "pavel32104@yandex.ru";
$subject = 'сообщения с сайта rdanuna  ';
$massage = $sendinfo2;
$headers = "Content-type: text/html; charset=utf-8\r\n";

mail($to, $subject, $massage, $headers);
