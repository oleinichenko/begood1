<?php
$fio = $_POST['fio'];
$age = $_POST['age'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$fio = htmlspecialchars($fio);
$age = htmlspecialchars($age);
$tel = htmlspecialchars($tel);
$message = htmlspecialchars($message);
$fio = urldecode($fio);
$age = urldecode($age);
$tel = urldecode($tel);
$message = urldecode($message);
$fio = trim($fio);
$age = trim($age);
$tel = trim($tel);
$message = trim($message);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("ilich1331@yandex.ru", "Анкета волонтера", "ФИО: ".$fio.". \nВозраст: ".$age. "\nТелефон: ".$tel. "\nСообщение: ".$message,"From: ilich1331@gmail.com \r\n"))
 {      header("Refresh:0; url=help.html");
        echo '<script language="javascript">';
        echo 'alert("Заявка успешно отправлена")';
        echo '</script>';
        
} else {
    echo "При отправке возникла ошибка";
}?>