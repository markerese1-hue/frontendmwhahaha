<?php
include 'header.php';

$totalBookings = 4;
$totalRooms = 8;
$totalUsers = 5;
$todayCheckins = 1;
$todayCheckouts = 5;
?>

<h2 class="mb-4">Dashboard</h2>

<div class="row g-4">

<div class="col-md-4 col-lg-3">
    <div class="card text-center shadow-sm">
        <div class="card-body">
            <h1><?= $totalBookings ?></h1>
            <p class="text-muted">Total Bookings</p>
        </div>
    </div>
</div>

<div class="col-md-4 col-lg-3">
    <div class="card text-center shadow-sm">
        <div class="card-body">
            <h1><?= $totalRooms ?></h1>
            <p class="text-muted">Total Rooms</p>
        </div>
    </div>
</div>

<div class="col-md-4 col-lg-3">
    <div class="card text-center shadow-sm">
        <div class="card-body">
            <h1><?= $totalUsers ?></h1>
            <p class="text-muted">Total Users</p>
        </div>
    </div>
</div>

<div class="col-md-4 col-lg-3">
    <div class="card text-center shadow-sm">
        <div class="card-body">
            <h1><?= $todayCheckins ?></h1>
            <p class="text-muted">Today's Check-ins</p>
        </div>
    </div>
</div>

<div class="col-md-4 col-lg-3">
    <div class="card text-center shadow-sm">
        <div class="card-body">
            <h1><?= $todayCheckouts ?></h1>
            <p class="text-muted">Today's Check-outs</p>
        </div>
    </div>
</div>

</div>

<?php include 'footer.php'; ?>