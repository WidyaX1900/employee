<div class="container mt-5">
    <h1>Are you sure want to delete <?= $employees[0]->name; ?>?</h1>
    <div class="mt-4">
        <a href="<?= base_url(); ?>worker/" class="btn btn-outline-secondary">
            Cancel
        </a>
        <a href="<?= base_url(); ?>worker/destroy/<?= $employees[0]->id; ?>" class="btn btn-danger mx-3">
            Delete
        </a>
    </div>
</div>