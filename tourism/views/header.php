<?php
// session_start(); // enable if needed
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        overflow-x: hidden;
    }

    #sidebar {
        width: 250px;
        min-height: 100vh;
    }

    .sidebar-link {
        text-decoration: none;
        display: block;
        padding: 10px 15px;
        color: #333;
    }

    .sidebar-link:hover {
        background-color: #e9ecef;
    }

    .active-link {
        background-color: #0d6efd;
        color: white !important;
    }
</style>

</head>
<body>

<div class="d-flex">

<!-- Sidebar -->
<div id="sidebar" class="bg-light border-end">

    <div class="text-center p-4 border-bottom">
        <div class="fs-1">👤</div>
        <div>Welcome!</div>
        <strong>Mark</strong>
    </div>

    <div class="list-group list-group-flush">

        <a href="index.php"
           class="sidebar-link <?= $currentPage == 'index.php' ? 'active-link' : '' ?>">
           Dashboard
        </a>

        <a href="rooms.php"
           class="sidebar-link <?= $currentPage == 'rooms.php' ? 'active-link' : '' ?>">
           Room Management
        </a>

        <a href="reservation.php"
           class="sidebar-link <?= $currentPage == 'reservation.php' ? 'active-link' : '' ?>">
           Reservation
        </a>


        <a href="admin.php"
           class="sidebar-link <?= $currentPage == 'admin.php' ? 'active-link' : '' ?>">
           Admin
        

        
        <a href="location.php"
           class="sidebar-link <?= $currentPage == 'location.php' ? 'active-link' : '' ?>">
           Location
        </a>

        <a href="sales.php"
           class="sidebar-link <?= $currentPage == 'sales.php' ? 'active-link' : '' ?>">
           Sales Report
        </a>

        <a href="about.php"
           class="sidebar-link <?= $currentPage == 'about.php' ? 'active-link' : '' ?>">
           About
        </a>

        <a href="contact.php"
           class="sidebar-link <?= $currentPage == 'contact.php' ? 'active-link' : '' ?>">
           Contact
        </a>

        <a href="logout.php" class="sidebar-link text-danger fw-bold">
           Log Out
        </a>

    </div>
</div>

<!-- Main Content -->
<div class="flex-grow-1">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="topBar" style="background-color: #53565b;">
        <div class="container-fluid">
            <span class="navbar-brand">Admin Panel</span>
        </div>
    </nav>

    <div class="container-fluid p-4">
