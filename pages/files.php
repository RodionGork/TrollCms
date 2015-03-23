<h3>Images and other Files</h3>

<ul>
    <?php foreach ($model->files as $file) : ?>
    <li><a href="<?= aurl('datab/' . $file) ?>"><?= $file ?></a> -
        (<a href="<?= url('filedel', 'sure', 'yes', 'name', $file) ?>">del</a>)</li>
    <?php endforeach; ?>
</ul>

<form enctype="multipart/form-data" action="<?= url('fileup') ?>" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
    <input type="file" name="upload"/>
    <input type="submit" value="Send"/>
</form>

