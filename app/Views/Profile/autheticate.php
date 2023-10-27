<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit Profile<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title">Edit profile</h1>

    <p>Please enter your password to continue</p>

    <?= form_open("/profile/processauthenticate") ?>
    <div>
        <label for="name">Password</label>
        <input type="password" name="password">
    </div> 
    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary">Send</button>
        </div>
        <div class="control">
            <a class="button" href="<?= site_url("/profile/show/") ?>">Cancel</a>
        </div>
    </div>
    </form>
<?= $this->endSection() ?>