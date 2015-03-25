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

<script>
var mode = '<?= $model->mode == "md" ? "markdown" : "application/x-httpd-php" ?>';

$(function() {

    var editable = CodeMirror.fromTextArea($('#editform textarea').get(0), {
        lineNumbers: true,
        matchBrackets: true,
        mode: mode,
        indentUnit: 4,
        indentWithTabs: true,
        enterMode: "keep",
        tabMode: "shift"
    });
    
    $("editform input[type=submit]").click(function() {
        var text = editable.getValue();
        $("#editform textarea").val(src)
        return true;
    });
    
});
</script>
