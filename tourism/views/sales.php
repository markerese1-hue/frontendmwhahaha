<?php include 'header.php'; ?>

<h2 class="mb-4">Sales Report</h2>

<!-- FILTER SECTION -->
<div class="card shadow-sm mb-4">
    <div class="card-body">

        <div class="row align-items-end g-3">

            <div class="col-md-3">
                <label class="form-label fw-bold">From</label>
                <input type="date" class="form-control">
            </div>

            <div class="col-md-3">
                <label class="form-label fw-bold">To</label>
                <input type="date" class="form-control">
            </div>

            <div class="col-md-3">
                <button class="btn btn-success mt-3">
                    Filter
                </button>

                <button class="btn btn-danger mt-3">
                    Clear
                </button>
            </div>

        </div>

    </div>
</div>

<!-- SALES TABLE -->
<div class="card shadow-sm mb-4">
    <div class="card-body p-0">

        <div class="table-responsive">
            <table class="table table-hover mb-0">

                <thead class="table-dark">
                    <tr>
                        <th># Guest Group ID</th>
                        <th>Guest Info</th>
                        <th>Date</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- Sample Row -->
                    <tr>
                        <td>GG-001</td>
                        <td>
                            <strong>Name:</strong> Ann Cruz <br>
                            <small>09222222222</small>
                        </td>
                        <td>12-20-2025</td>
                        <td>1,350.00</td>
                    </tr>

                    <!-- Empty State Example -->
                    <!--
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">
                            No sales records found.
                        </td>
                    </tr>
                    -->

                </tbody>

            </table>
        </div>

    </div>
</div>

<!-- DAILY SALES SUMMARY -->
<h5 class="mb-3 fw-bold">Daily Sales Summary:</h5>

<div class="card shadow-sm">
    <div class="card-body p-0">

        <div class="table-responsive">
            <table class="table table-hover mb-0">

                <thead class="table-dark">
                    <tr>
                        <th>Date</th>
                        <th>Total Sales</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- Sample Row -->
                    <tr>
                        <td>12-20-2025</td>
                        <td>5,400.00</td>
                    </tr>

                    <!-- Empty State Example -->
                    <!--
                    <tr>
                        <td colspan="2" class="text-center text-muted py-4">
                            No summary data available.
                        </td>
                    </tr>
                    -->

                </tbody>

            </table>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>
