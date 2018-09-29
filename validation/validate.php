<?php
include 'Validation.php';


$v = new Validation();
$v->setRequiredFields(array('name', 'email'));
$v->setRule('email', 'email');
$v->validate();

if($errorsMessage = $v->getErrors()) {
  session_start();
  $_SESSION['errorsMessage'] = $errorsMessage;
  include 'index.php';
}
