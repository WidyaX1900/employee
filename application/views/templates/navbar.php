<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url(); ?>">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse px-4" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Home</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="<?= base_url(); ?>worker/">Employees</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-4">