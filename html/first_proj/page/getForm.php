<?php
if (!empty($_POST['comment'])){

 $theme = '����� ���������';

 $letter ='������ ���������:'\n';
 $letter .='���: '.$_POST['FirstName'].'\n';
 $letter .='�������: '.$_POST['LastName'].'\n';
 $letter .='�����: '.$_POST['comment'].'\n';

 if (mail('victorija45@gmail.com', $theme, $letter)){
  header('Location:../index.html');
} 
else {
  header('Location:/error.html');
}
} 
