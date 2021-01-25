<?php
if (!empty($_POST['comment'])){

 $theme = 'Новое Сообщение';

 $letter ='Данные сообщения:'\n';
 $letter .='Имя: '.$_POST['FirstName'].'\n';
 $letter .='Фамилия: '.$_POST['LastName'].'\n';
 $letter .='Форма: '.$_POST['comment'].'\n';

 if (mail('victorija45@gmail.com', $theme, $letter)){
  header('Location:../index.html');
} 
else {
  header('Location:/error.html');
}
} 
