<?php

include 'functions.php';
include 'FileHandler.php';

$fileHandler = new FileHandler;
$fileHandler->uploadFile($_FILES, 'files', 'posts', 'file');

header('Location: /index.php');
