<?php
include 'functions.php';
include 'FileHandler.php';

$id = $_GET['id'];

$fileHandler = new FileHandler;
$fileHandler->deleteFile($id, 'files', 'posts', 'file');

header('Location: /index.php');
