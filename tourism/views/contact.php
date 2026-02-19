<?php include 'header.php'; ?>

<?php
// session_start(); // Uncomment if session is required
$currentPage = basename($_SERVER['PHP_SELF']);
?>



<!-- Main Content -->
<div class="container mt-4">

    <h1 class="mb-4">Contact Management</h1>

    <!-- Add Contact Button -->
    <div class="mb-3">
        <a href="add_contact.php" class="btn btn-primary">Add Contact Info</a>
    </div>

    <!-- Contact Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Serial No.</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Hours</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>123 Main St, City</td>
                <td>(123) 456-7890</td>
                <td>example@example.com</td>
                <td>9 AM - 5 PM</td>
                <td>
                    <a href="update_contact.php?id=1" class="btn btn-warning btn-sm">Update</a>
                    <a href="delete_contact.php?id=1" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <!-- Add more rows here dynamically from the database -->
        </tbody>
    </table>

</div>

</body>
</html>
<?php include('footer.php'); ?>