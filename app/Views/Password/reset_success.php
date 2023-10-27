<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('password.title_reset') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title"><?=lang('password.title_reset') ?></h1>

    <p><?=lang('password.reset_success') ?></p>

    <a href="<?= site_url('/login') ?>"><?=lang('Login.log_in') ?></a>

<?= $this->endSection() ?>

