<?= $this->extend('layout/layout.php') ?>

<?= $this->section('content') ?>


<div style="margin-top: 40px;" class="container">
    <form action="<?= base_url('users/update/' . $user['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="form-group">
            <img style="width: 50px;" src="<?= ($user['avatar'] ? '/images/' . $user['avatar'] : 'https://placehold.co/600x400?font=roboto') ?>" />
            <label>Avatar Image</label>
            <input name="avatar" type="file" size="20" value="<?= $user['avatar'] ?? '' ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Full Name</label>
            <input name="fullname" value="<?= $user['fullname'] ?? '' ?>" type="text" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input name="email" type="email" value="<?= $user['email'] ?? '' ?>" class="form-control" placeholder="Enter email">
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

<?= $this->endSection('content') ?>