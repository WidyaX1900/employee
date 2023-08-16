<header class="mb-4">
    <h1>Employee Data</h1>
</header>
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
            <th scope="col">Division</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>