<?php include 'header.php'; ?>

<h2 class="mb-4">Reservation</h2>

<div class="card shadow-sm">
    <div class="card-body p-0">

        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>Guest Info</th>
                        <th>Booking Details</th>
                        <th>Party Size</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- Sample Row -->
                    <tr>
                        <!-- Guest Info -->
                        <td>
                            <strong>Name:</strong> Ann Cruz <br>
                            <strong>Contact No:</strong> 09222222222
                        </td>

                        <!-- Booking Details -->
                        <td>
                            <div class="bg-light p-2 rounded">
                                <strong>Room Type:</strong> Studio <br>
                                <strong>Unit:</strong> 101 <br>
                                <strong>Hours:</strong> 22 <br>
                                <strong>Date In/Out:</strong> 12-20-25 | 12-21-24
                            </div>
                        </td>

                        <!-- Party Size -->
                        <td>2</td>

                        <!-- Total -->
                        <td>1,350.00</td>

                        <!-- Status -->
                        <td>
                            <span class="badge bg-warning text-dark">
                                Pending
                            </span>
                        </td>

                        <!-- Action -->
                        <td class="text-center">
                            <button class="btn btn-sm btn-success">
                                Update
                            </button>
                        </td>

                    </tr>

                    <!-- Empty State Example -->
                    <!--
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            No reservations found.
                        </td>
                    </tr>
                    -->

                </tbody>

            </table>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>
