<?php

include 'functions.php';
include 'FileHandler.php';

$db = include 'database/start.php';
$fileHandler = new FileHandler($db);
$fileHandler->uploadFile($_FILES, 'files', 'posts', 'file');

header('Location: /index.php');
