<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('password.title_reset') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title"><?=lang('password.title_reset') ?></h1>

    <?php if (session()->has('errors')): ?>
        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error?></li>  
            <?php endforeach ?>
        </ul>
<?php endif ?>
    <?= form_open("/password/processreset/$token") ?>

        <label for="password"><?=lang('password.password') ?></label>
        <input type="password" name="password">
    </div>
    <div>
        <label for="password_confirmation"><?=lang('password.repeat_password') ?></label>
        <input type="password" name="password_confirmation">
    </div>

    <button><?=lang('password.reset_password') ?></button>
    </form>

<?= $this->endSection() ?>

