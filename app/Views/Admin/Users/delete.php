<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('AdminUsers.delete_user') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1><?=lang('AdminUsers.delete_user') ?></h1>


    <p><?=lang('AdminUsers.are_you_sure') ?></p>
<?= form_open("/admin/users/delete/" . $user->id)?>

    <button class="button is-primary"><?=lang('AdminUsers.save') ?></button>
    <a href="<?= site_url("/admin/users/show/" . $user->id)?>"><?=lang('AdminUsers.cancel') ?></a>

</form>

<?= $this->endSection() ?>