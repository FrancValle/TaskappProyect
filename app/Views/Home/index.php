<?= $this->extend('layouts/default') ?>

<?= $this->Section("title") ?><?=lang('Home.title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title"><?=lang('Home.welcome') ?></h1>

    
<?= $this->endSection() ?>