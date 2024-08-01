<?php
include 'config.php';

// Check if ID parameter is passed
if (!isset($_GET['id']) || empty(trim($_GET['id']))) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];

// Initialize variables
$eventType = $numGuards
