<?= $this->extend('layouts/default') ?>

<?= $this->Section("title") ?><?=lang('password.title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

   <h1 class="title"><?=lang('password.title') ?></h1>

<?= form_open("/password/processforgot") ?>

    <div>
        <label class="label" for="email"><?=lang('password.email') ?></label>
        <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>
    <br>
    <button class="button is-primary"><?=lang('password.send') ?></button>

<?=  $this->endSection() ?>