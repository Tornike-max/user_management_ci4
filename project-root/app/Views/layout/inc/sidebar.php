<?php
$uri = $_SERVER['REQUEST_URI'];
?>

<ul style="padding-top: 20px;" class="nav nav-pills nav-stacked">
    <li class="<?= $uri === '/' ? 'active' : '' ?>"><a href="<?= base_url('/') ?>">Home</a></li>
    <li class="<?= $uri === '/users/create' ? 'active' : '' ?>"><a href="<?= base_url('/users/create') ?>">Create User</a></li>
    <?php if (session()->has('loggedInUser')) : ?>
        <li class="<?= $uri === '/users/destroy' ? 'active' : '' ?>"><a href="<?= base_url('/users/destroy') ?>">Logout</a></li>
    <?php endif; ?>
    <?php if (!session()->has('loggedInUser')) : ?>
        <li class="<?= $uri === '/users/login' ? 'active' : '' ?>"><a href="<?= base_url('/users/login') ?>">Login</a></li>
    <?php endif; ?>
</ul>