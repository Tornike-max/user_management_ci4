<?= $this->extend('layout/layout') ?>


<?= $this->section('content') ?>

<table style="margin-top: 20px; margin-left: 10px; margin-right: 10px" class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">actions</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($users as $user) : ?>
            <tr>
                <th scope="row"><?= $user['id'] ?></th>
                <td><?= $user['fullname'] ?></td>
                <td><?= $user['email'] ?></td>
                <td class="d-flex justify-content-center align-items-center">
                    <a href="<?= base_url('/') ?>" class="btn btn-success">Edit</a>
                    <form method="post" action="#">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;  ?>
    </tbody>
</table>

<?= $this->endSection() ?>