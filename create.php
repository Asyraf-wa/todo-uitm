<?php include 'includes/header.php'; ?>

<div class="row mt-5">
    <div class="col-md-3">
        <div class="card shadow bg-body-tertiary border-0">
            <div class="card-body">
                <div class="fw-bold">Instructions</div>
                <hr />
                Please fill in all required fields.
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card shadow bg-body-tertiary border-0">
            <div class="card-body">
                <form method="POST" action="create.php">
                    <label for="title" class="form-label fw-bold">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= htmlspecialchars($title ?? '') ?>" required />

                    <label for="description" class="form-label fw-bold">Task Description <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="description" name="description" rows="4" required>  <?= htmlspecialchars($description ?? '') ?></textarea>

                    <label for="status" class="form-label fw-bold">Status<span class="text-danger">*</span></label>

                    <select class="form-select" id="status" name="status">
                        <option value="pending" <?= (($status ?? '') == 'pending') ? 'selected' : '' ?>>Pending</option>

                        <option value="in-progress" <?= (($status ?? '') == 'in-progress') ? 'selected' : '' ?>>In-progress</option>

                        <option value="completed" <?= (($status ?? '') == 'completed') ? 'selected' : '' ?>>Completed</option>
                    </select>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>