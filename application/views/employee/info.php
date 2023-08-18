<div class="row mt-5">
    <div class="col-4">
        <div class="profile-image">
            <img src="<?= base_url('assets/'); ?>img/<?= $employees[0]->picture; ?>" alt="default image" width="300px">
        </div>
    </div>
    <div class="col-8 mt-5">
        <h2>Employee Info</h2>
        <ul class="mt-3">
            <li>Name: <?= $employees[0]->name; ?></li>
            <li class="mt-3">E-mail: <?= $employees[0]->email; ?></li>
            <li class="mt-3">Phone: +62 <?= $employees[0]->phone; ?></li>
        </ul>
    </div>
</div>