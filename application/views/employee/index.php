<header class="mb-4">
    <h1>Employee Data</h1>
</header>

<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-<?= $this->session->flashdata('success'); ?>" role="alert">
        <strong><?= $this->session->flashdata('result'); ?></strong> <?= $this->session->flashdata('action'); ?>
    </div>
<?php endif; ?>

<div class="d-flex justify-content-between">
    <a href="<?= base_url(); ?>worker/create/" class="btn btn-primary p-3 mb-3">
        Add Employee
    </a>
</div>
<table class="table border">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($employees as $employee) : ?>
            <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $employee->name; ?></td>
                <td>
                    <a href="<?= base_url(); ?>worker/show/<?= $employee->id; ?>" class="btn btn-primary btn-sm">
                        Detail
                    </a>
                    <a href="<?= base_url(); ?>worker/edit/<?= $employee->id; ?>" class="btn btn-warning btn-sm">
                        Edit
                    </a>
                    <a href="<?= base_url(); ?>worker/delete/<?= $employee->id; ?>" class="btn btn-danger btn-sm">
                        Delete
                    </a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>