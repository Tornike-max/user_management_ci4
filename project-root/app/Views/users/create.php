<?= $this->extend('layout/layout.php') ?>

<?= $this->section('content') ?>

<span><?= session()->getFlashdata('error') ?></span>
<?= validation_list_errors() ?>
<div style="margin-top: 40px;" class="container">
    <form action="<?= base_url('users/store') ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label>Full Name</label>
            <input name="fullname" value="<?= set_value('fullname') ?>" type="text" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input name="email" type="email" value="<?= set_value('email') ?>" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control" placeholder="Password">
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input name="passwordConf" type="password" class="form-control" placeholder="Confirm Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection('content') ?>