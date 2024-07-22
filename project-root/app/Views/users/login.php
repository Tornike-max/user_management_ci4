<?= $this->extend('layout/layout') ?>


<?= $this->section('content') ?>

<div style="margin-top: 40px;" class="container">
    <form action="<?= base_url('users/login/store') ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label>Email address</label>
            <input name="email" type="email" value="<?= $user['email'] ?? '' ?>" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input name="password" type="text" class="form-control" placeholder="Enter Password">
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

<?= $this->endSection() ?>