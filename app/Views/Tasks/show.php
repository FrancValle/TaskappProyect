<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('Tasks.title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title"><?=lang('Tasks.title') ?></h1>
<dl>

<a href="<?= site_url("/tasks") ?>">&laquo; <?=lang('Tasks.back_to_index') ?></a>

</dl>
    <dt class="has-text-weight-bold"><?=lang('Tasks.id') ?></dt>
    <dd><?= $task->id ?></dd>

    <td class="has-text-weight-bold"><?=lang('Tasks.description') ?></td>
    <dd><?= esc($task->description) ?></dd>
    
    <td class="has-text-weight-bold"><?=lang('Tasks.created_at') ?></td>
    <dd><?= $task->created_at->humanize() ?></dd>
    
    <td class="has-text-weight-bold"><?=lang('Tasks.updated_at') ?></td>
    <dd><?= $task->updated_at->humanize() ?></dd>
</dl>
   
<a class="button is-link " href="<?= site_url("/tasks/edit/" . $task->id) ?>"><?=lang('Tasks.edit') ?></a>
<a class="button is-link" href="<?= site_url("/tasks/delete/" . $task->id) ?>"><?=lang('Tasks.delete') ?></a>
<?= $this->endSection() ?>