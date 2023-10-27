<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('AdminUsers.title_user') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title"><?=lang('AdminUsers.title_user') ?></h1>
<dl>

<a href="<?= site_url("/admin/users") ?>">&laquo; <?=lang('AdminUsers.back_to_index') ?></a>

</dl>
    <dt class="has-text-weight-bold"><?=lang('AdminUsers.name') ?></dt>
    <dd><?= esc($user->name) ?></dd>

    <td class="has-text-weight-bold"><?=lang('AdminUsers.email') ?></td>
    <dd><?= esc($user->email) ?></dd>

    <dt class="has-text-weight-bold"><?=lang('AdminUsers.active') ?></dt>
    <dd><?= $user->is_active ? 'yes' : 'no' ?></dd>
    
    <dt class="has-text-weight-bold"><?=lang('AdminUsers.administrator') ?></dt>
    <dd><?= $user->is_admin ? 'yes' : 'no' ?></dd>

    <td class="has-text-weight-bold"><?=lang('AdminUsers.created_at') ?></td>
    <dd><?= $user->created_at ?></dd>
    
    <td class="has-text-weight-bold"><?=lang('AdminUsers.updated_at') ?></td>
    <dd><?= $user->updated_at ?></dd>
</dl>
   
<a href="<?= site_url("/admin/users/edit/" . $user->id) ?>"><?=lang('AdminUsers.edit') ?></a>

<?php if ($user->id != current_user()->id): ?>
<a href="<?= site_url("/admin/users/delete/" . $user->id) ?>"><?=lang('AdminUsers.delete') ?></a>

<?php endif; ?>

<?= $this->endSection() ?>