<?php
// Include header (top navbar + sidebar)
require_once 'header.php';
?>

<div class="container-fluid px-4">
    <h2 class="mt-4">About</h2>

    <!-- ABOUT SECTION -->
    <div class="card mb-4">
        <div class="card-header">
            <strong>About Section</strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th width="120">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamic content goes here -->
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-success btn-sm">Update</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- TEAM MEMBERS -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <strong>Team Members</strong>
            <a href="#" class="btn btn-primary btn-sm">Add Team Members</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Image</th>
                        <th width="150">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamic content goes here -->
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-success btn-sm">Update</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
// Include footer
require_once 'footer.php';
?>
