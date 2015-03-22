<h3>Editing: <?= $model->name ?></h3>

<?php if ($model->name[0] != '-') : ?>
<p><a href="<?= url('p', 'param', $model->name) ?>" target="_blank">View this page</a></p>
<?php endif; ?>

<form id="editform" method="post" action="<?= url('save') ?>">
    <input type="hidden" name="name" value="<?= $model->name ?>"/>
    <textarea name="text"><?= $model->text ?></textarea>
    <br/>
    <input type="submit" value="Save" class="btn btn-default"/>
</form>

