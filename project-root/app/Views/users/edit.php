<?= $this->extend('layout/layout.php') ?>

<?= $this->section('content') ?>


<div style="margin-top: 40px;" class="container">
    <form action="<?= base_url('users/update/' . $user['id']) ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label>Full Name</label>
            <input name="fullname" value="<?= $user['fullname'] ?>" type="text" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input name="email" type="email" value="<?= $user['email'] ?>" class="form-control" placeholder="Enter email">
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

<?= $this->endSection('content') ?>