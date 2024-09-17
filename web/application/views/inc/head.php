<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Madex</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/img/m.png">
	<style type="text/css" >
.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.card {
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 10px;
    width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-header {
    padding: 20px;
    background-color: #f8f9fa;
    border-bottom: 1px solid #ddd;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.card-title {
    margin-bottom: 5px;
    font-size: 18px;
    font-weight: bold;
}

.card-subtitle {
    font-size: 14px;
    color: #6c757d;
}

.card-body {
    padding: 20px;
}

.card-body p {
    margin-bottom: 10px;
}

.card-footer {
    padding: 15px;
    background-color: #f8f9fa;
    border-top: 1px solid #ddd;
    display: flex;
    justify-content: space-around;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

.btn {
    padding: 8px 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-danger {
    background-color: #dc3545;
    color: white;
}

.btn-warning {
    background-color: #ffc107;
    color: black;
}

.btn:hover {
    opacity: 0.8;
}


    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.bundle.min.js"></script>
		
</head>
<body>