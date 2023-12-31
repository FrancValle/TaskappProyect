<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit Profile<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title">Edit profile</h1>

    <?php if (session()->has('errors')): ?>
        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error?></li>  
            <?php endforeach ?>
        </ul>
<?php endif ?>
    <?= form_open("/profile/update") ?>
    <div>
        <label class="label" for="name">Name</label>
        <input class="input" type="text" name="name" id="name" value="<?= old('name', esc($user->name))?>">
    </div>
    <div>
        <label class="label" for="email">email</label>
        <input class="input" type="text" name="email" id="email" value="<?= old('email', esc($user->email))?>">
    </div>
    <br>
    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary">Save</button>
        </div>
        <div class="control">
            <a class="button" href="<?= site_url("/profile/show/") ?>">Cancel</a>
        </div>
    </div>
    </form>
<?= $this->endSection() ?>

 