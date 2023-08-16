<div class="container mt-4">
    <div class="mb-4">
        <a href="<?= base_url(); ?>/worker/">Back</a>
    </div>
    <div class="row">
        <div class="col-lg-8 border p-4 rounded">
            <form action="<?= base_url(); ?>worker/store/" method="post">
                <div class="mb-4">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="email" placeholder="example@email.com" name="email">
                </div>
                <div class="mb-4">
                    <label for="phone" class="form-label">Phone</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                        <input type="text" class="form-control" placeholder="Your Phone Number" id="phone" name="phone">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>