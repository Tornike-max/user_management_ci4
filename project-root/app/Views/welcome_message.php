<?= $this->extend('layout/layout.php') ?>

<?= $this->section('content') ?>

<div>
    <?= $this->include('ui/usersTable') ?>
    <?= $pager->links() ?>
</div>

<?= $this->endSection('content') ?>