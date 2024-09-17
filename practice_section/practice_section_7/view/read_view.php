<?php include "../template/header.php"; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>User List</h3>
                </div>
                <div class="card-body">
                    <?php include "../service/read_service.php" ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../template/footer.php"; ?>
