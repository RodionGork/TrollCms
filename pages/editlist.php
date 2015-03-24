<ul>
<?php foreach ($model->files as $f) : ?>
    <li>
        <a href="<?= url('edit', 'param', $f) ?>"><?= $f ?></a>
    </li>
<?php endforeach; ?>
</ul>

<div>
    New file:
    <input placeholder="Name" id="new-name"/>
    <input type="button" id="new-button" value="Create"/>
</div>

<script>
$(function() {
    $('#new-button').click(function() {
        location.href = location.href + '/' + $('#new-name').val();
    });
});

</script>

