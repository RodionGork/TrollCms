<ul>
<?php foreach ($model->files as $f) : ?>
    <li>
        <a href="<?= url('edit', 'param', $f) ?>"><?= $f ?></a>
    </li>
<?php endforeach; ?>
</ul>
