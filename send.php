<?php
$order_numb = date('s').rand(10, 99)."-".date('h').rand(10, 99)."-".date('m').rand(10, 99);

$order_text = "";	
			
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail_user = $_POST['mail'];
$button = $_POST['button'];


$from = "Lending_lead_design";
$mail = "ekaterinakirilyeva@gmail.com";
$subject = "Lending-lead №".$order_numb;
$order_text = "Имя : ".$name."\n"
			 ."Телефон : ".$phone."\n"
			 ."Mail : ".$mail_user."\n"
			 ."Кликнул по: ".$button."\n";

mail($mail, $subject, $order_text, $from);



echo $order_numb;
?>

