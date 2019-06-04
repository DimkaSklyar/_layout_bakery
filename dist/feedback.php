<?php 
if($_POST) 
{ 
$to = "example@example.ru"; //куда отправлять письмо 
$subject = "Обратная связь"; //тема 
$message = '<span style="font-weight:bold;color:#ff6600;font-size:18px;"><i>Обратная связь!</i> </span><br><br> 
Имя: <span style="font-weight:bold;color:#339900;">'.$_POST['name'].'</span><br> 
E-mail: <span style="font-weight:bold;color:#339900;">'.$_POST['mail'].'</span><br>
Телефон: <span style="font-weight:bold;color:#339900;">'.$_POST['inputTel'].'</span><br>'
'Сообщение: <span style="font-weight:bold;color:#339900;">'.$_POST['comment'].'</span><br>'; 
$headers = "Content-type: text/html; charset=UTF-8 \r\n"; 
$headers .= "From: info@my-site.ru\r\n"; // от кого, придумайте ящик или укажите почту своего сайта. 
$result = mail($to, $subject, $message, $headers); 

if ($result){ 
echo "<p style='text-transform: uppercase; 
font-size: 1em; 
background-color: #f3e200; 
font-weight: 700; 
padding: .4em; 
box-shadow: 0 19px 49px 0px rgba(81,74,48,0.3); 
text-align: center;'>Сообщение успешно отправлено."; 
} 
} 
?>