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

<div class="container-fluid py-3">
    <h4 class="mb-4 fw-bold text-dark">Update</h4>

    <form action="update_logic.php" method="POST" style="max-width: 600px;">
        
        <div class="row mb-2 align-items-center">
            <div class="col-sm-3">
                <label class="small fw-bold text-secondary">Guest Name</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="guest_name" class="form-control form-control-sm rounded-0 border shadow-none" placeholder="Enter Guest Name">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <div class="col-sm-3">
                <label class="small fw-bold text-secondary">Add Party Size</label>
            </div>
            <div class="col-sm-8">
                <input type="number" name="party_size" class="form-control form-control-sm rounded-0 border shadow-none" placeholder="Enter add Size">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <div class="col-sm-3">
                <label class="small fw-bold text-secondary">Add Hour</label>
            </div>
            <div class="col-sm-8">
                <input type="number" name="extra_hour" class="form-control form-control-sm rounded-0 border shadow-none" placeholder="Extra Hour">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <div class="col-sm-3">
                <label class="small fw-bold text-secondary">Add Bed</label>
            </div>
            <div class="col-sm-8">
                <input type="number" name="extra_bed" class="form-control form-control-sm rounded-0 border shadow-none" placeholder="Extra Bed">
            </div>
        </div>

        <div class="row mb-4 align-items-center">
            <div class="col-sm-3">
                <label class="small fw-bold text-secondary">Total</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="total" class="form-control form-control-sm rounded-0 border-0 bg-light text-muted" readonly 
                       placeholder="*/auto generate total" style="font-size: 0.85rem; font-style: italic;">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8 offset-sm-3 d-flex gap-2">
                <button type="button" class="btn btn-sm fw-bold rounded-0 px-3 text-white" style="background-color: #ff0000; border: none;">Cancel</button>
                <button type="submit" class="btn btn-sm fw-bold rounded-0 px-3 text-white" style="background-color: #00ff66; border: none;">Update</button>
            </div>
        </div>

    </form>
</div>

<?php include 'footer.php'; ?>
