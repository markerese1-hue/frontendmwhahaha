<?php include 'header.php'; ?>

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-sm" style="width: 400px;">
        <div class="card-body text-center p-4">

            <h4 class="mb-3">Logging Out?</h4>

            <p class="text-muted">
                You can always log in again anytime.
            </p>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="dashboard.php" class="btn btn-secondary">
                    Cancel
                </a>

                <a href="logout_action.php" class="btn btn-danger">
                    Log Out
                </a>
            </div>

        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
