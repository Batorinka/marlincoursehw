<?php
include 'functions.php';
include 'FileHandler.php';

$id = $_GET['id'];

$db = include 'database/start.php';
$fileHandler = new FileHandler($db);
$fileHandler->deleteFile($id, 'files', 'posts', 'file');

header('Location: /index.php');
