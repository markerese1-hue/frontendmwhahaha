<?php include 'header.php'; ?>

<h2 class="mb-4">Room Management</h2>

<!-- Top Buttons -->
<div class="d-flex gap-2 mb-3">
    <button class="btn btn-success">
        + Add Room Type
    </button>

    <button class="btn btn-primary">
        + Add Room No.
    </button>
</div>

<!-- Room Table -->
<div class="card shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Room Type</th>
                        <th>Room Number</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Row -->
                    <tr>
                        <td>Studio Type</td>
                        <td>101</td>
                        <td>
                            <img src="https://via.placeholder.com/60x40"
                                 class="img-thumbnail"
                                 alt="Room Image">
                        </td>
                        <td>1,350.00</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary">
                                Add to Room List
                            </button>
                            <button class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <!-- Empty state example -->
                    <!--
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            No rooms added yet.
                        </td>
                    </tr>
                    -->

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
