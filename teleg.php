<?php

/* https://api.telegram.org/bot-TOKEN-/getUpdates */

$name = $_POST['name'];
$phone = $_POST['tel'];
$mail = $_POST['mail'];
$option = $_POST['option'];
$mess = $_POST['mess'];
$token = "-5153339690:AAH1_INtuRSq6mhOou37pO-nnm5VDscUgZk-";
$chat_id = "984986447";
// $chat_id = "5350400304";
$arr = array(
  'Name: ' => $name,
  'Phone: ' => $phone,
  'Mail: ' => $mail,
  'Option: ' => $option,
  'Mess: ' => $mess
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
?>
