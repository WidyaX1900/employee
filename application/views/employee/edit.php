<div class="container mt-4">
    <div class="mb-4">
        <a href="<?= base_url(); ?>worker/">Back</a>
    </div>
    <div class="row">
        <div class="col-lg-8 border p-4 rounded">
            <div class="mb-4">
                <h5>Profile Picture</h5>
                <?php if ($employees[0]->picture === 'default.png') : ?>
                    <p class="fst-italic">No Profile Picture</p>
                <?php else : ?>
                    <img src="<?= base_url('assets/'); ?>profile/<?= $employees[0]->picture; ?>" alt="default image" width="100px">
                <?php endif; ?>
            </div>
            <form action="<?= base_url(); ?>worker/update/<?= $employees[0]->id; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="oldPicture" value="<?= $employees[0]->picture; ?>">
                <div class="mb-4">
                    <label for="name" class="form-label">
                        Full Name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" id="name" placeholder="Employee Name" name="name" autofocus="on" value="<?= $employees[0]->name; ?>">
                    <div class="mt-2">
                        <small class="text-danger fst-italic"><?= form_error('name'); ?></small>
                    </div>
                </div>
                <div class=" mb-4">
                    <label for="email" class="form-label">
                        E-mail
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" id="email" placeholder="example@email.com" name="email" value="<?= $employees[0]->email; ?>">
                    <div class="mt-2">
                        <small class="text-danger fst-italic"><?= form_error('email'); ?></small>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="phone" class="form-label">
                        Phone
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                        <input type="text" class="form-control" placeholder="Employee Phone Number" id="phone" name="phone" value="<?= $employees[0]->phone; ?>">
                    </div>
                    <small class="text-danger fst-italic"><?= form_error('phone'); ?></small>
                </div>
                <div class="mb-4">
                    <label for="photo" class="form-label">
                        Photo
                    </label>
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>