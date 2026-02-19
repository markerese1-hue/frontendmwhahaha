<?php include 'header.php'; ?>

<h2 class="mb-4">Location Management</h2>

<div class="card shadow-sm">
    <div class="card-body p-0">

        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>Transient Name</th>
                        <th>Address</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- Sample Row -->
                    <tr>
                        <td>Samson's Apartment and Transient House</td>
                        <td>Barangay Marala, Fort Magsaysay, Nueva Ecija</td>
                        <td class="text-center">

                            <button class="btn btn-sm btn-primary mb-1">
                                Change Location
                            </button>

                            <button class="btn btn-sm btn-success mb-1">
                                Add Location
                            </button>

                            <button class="btn btn-sm btn-danger">
                                Remove Location
                            </button>

                        </td>
                    </tr>

                    <!-- Empty State Example -->
                    <!--
                    <tr>
                        <td colspan="3" class="text-center text-muted py-4">
                            No location added yet.
                        </td>
                    </tr>
                    -->

                </tbody>

            </table>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>
