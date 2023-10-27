<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Profile<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title">Delete Profile image</h1>


    <p>Are you sure?</p>
<?= form_open("/profileimage/delete/")?>

    <button>Yes</button>
    <a href="<?= site_url("/profile/show/")?>">Cancel</a>

</form>

<?= $this->endSection() ?>