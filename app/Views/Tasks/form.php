
<div>
        <label for="description"><?=lang('Tasks.description') ?></label>
        <input type="text" name="description" id="description" 
               value="<?= old('description', esc($task->description) )?>">
    </div>